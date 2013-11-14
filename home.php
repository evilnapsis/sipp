<?php
include "core/bootstrap.inc";
session_start();
?>

<html>
<head>
	<title>SIPP - Sistema de Identificacion de Perfil Psicologico</title>
	<link rel='stylesheet' type='text/css' href='res/flatstrap/css/bootstrap.css'>
	<link rel='stylesheet' type='text/css' href='res/flatstrap/css/bootstrap-responsive.css'>
	<link rel='stylesheet' type='text/css' href='res/style/main.css'>
	<link rel='stylesheet' type='text/css' href='res/style/cards.css'>

	<!-- -->

<link rel="stylesheet" type="text/css" href="res/lib/css/prettify.css"></link>
<link rel="stylesheet" type="text/css" href="res/src/bootstrap-wysihtml5.css"></link>
<link rel="stylesheet" type="text/css" href="res/lineicons/style.css"></link>
<script src='jquery.min.js'></script>

</head>
<body>
	<div class='container'>
		<div class='row'>
			<div class='span6'>
				<h2 class='roboto river'><a href='index.php' style='color:black;text-decoration:none;'>SIPP <small>Sistema de Identificacion de Perfil Psicologico</small></a></h2>
			</div>
<?php
$ud = UserData::getById(Session::getUID());
?>
			<div class='span6'>
<br>
<ul class='topmenu pull-right'>
	<li><a href='home.php' style='color:black;'><?php echo $ud->name." ".$ud->lastname; ?></a></li>
	<li>
<div class="btn-group">
  <a class="btn btn-inverse dropdown-toggle" data-toggle="dropdown" href="#">
    <i class='icon-user'></i>
    <?php echo UserTypeData::getById($ud->usertype_id)->name;?>
    <span class="caret"></span>
  </a>
  <ul class="dropdown-menu pull-right">
  	<li><a href='home.php?module=profile'> <i class='icon-edit'></i> Perfil</a></li>
  	<li><a href='home.php?module=configuration'> <i class='icon-cogs'></i> Configuracion</a></li>
  	<li><a href='logout.php'> <i class='icon-signout'></i> Salir</a></li>
  </ul>
</div>
</li>
</ul>

<br>				
<?php
if($ud->image!=null){
$url="res/storage/".Session::getUID()."/profile/".$ud->image;
//print "<div class='mini-profile-image pull-right'><center><img src='$url'></center><div>";
}
?>

	</div>
		</div>
		<?php
	if($ud->usertype_id==1){
		if(!isset($_GET['module'])){
			include "core/view/home/modules/index/widget-default.php";
		}else {
			$module = $_GET['module'];
			if($module!="index"&& $module!="login" && $module!="profile" && $module!="jobs"&&$module!="alljobs" && $module!="configuration"&& $module!="test"&& $module!="history"){
			}else {
				include "core/view/home/modules/".$module."/widget-default.php";				
			}
		}
	}else if($ud->usertype_id==2){
		if(!isset($_GET['module'])){
			include "core/view/teacher/modules/index/widget-default.php";
		}else {
			$module = $_GET['module'];
			if($module!="index"&& $module!="login" && $module!="profile" && $module!="jobs"&&$module!="alljobs" && $module!="configuration"&& $module!="test"&& $module!="history"){
			}else {
				include "core/view/teacher/modules/".$module."/widget-default.php";				
			}
		}		
	}
		?>
	</div>
	<script src='jquery.min.js'></script>
	<script src='res/flatstrap/js/bootstrap.min.js'></script>
	<script>
	$('.tip').tooltip();
	</script>

</body>
</html>