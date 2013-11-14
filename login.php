<?php

define('LBROOT',getcwd()); // LegoBox Root ... the server root
include("core/controller/Database.php");
include("core/controller/Executor.php");
include("core/model/UserData.php");
include("core/model/UserTypeData.php");
include("core/model/StatusData.php");

$user = $_POST['mail'];
$pass = sha1(md5($_POST['password']));

$base = new Database();
$con = $base->connect();
$sql = "select * from user where plate= \"".$user."\" and password= \"".$pass."\"";
//print $sql;
$query = $con->query($sql);
$found = false;
$userid = null;
while($r = $query->fetch_array()){
	$found = true ;
	$userid = $r['id'];
}

if($found==true) {
	session_start();
//	print $userid;
	$_SESSION['user_id']=$userid ;
	$ud = UserData::getById($userid);
	
//	setcookie('userid',$userid);
//	print $_SESSION['userid'];
	if($ud->usertype_id==UserTypeData::getByName("admin")->id){
		print "Cargando panel de control para dominar el mundo ...";
 		print "<script>window.location='admin.php';</script>";
	}
	else{
		print "Cargando ... $user";
		print "<script>window.location='home.php';</script>";
	}
}else {
	print "<script>window.location='index.php?module=login';</script>";
}
?>