<?php
include "core/bootstrap.inc";

if(isset($_POST['reference'])){
	session_start();
	$reference = $_POST['reference'];
	if(Session::getUID()!=""){
		// acciones para usuarios logeados
		if($reference=="profile"){
			$ud = UserData::getById(Session::getUID());
			$p = new ProfileData();
			$p->user = $ud;
			$p->title = $_POST['title'];
			$p->biografy = $_POST['biografy'];
			$p->area = AreaData::getById($_POST['area_id']);
			$p->skills = $_POST['skills'];
			$p->country = CountryData::getById($_POST['country_id']);
			$p->address = $_POST['address'];
			$p->phone = $_POST['phone'];
			$p->website = $_POST['website'];
			$p->add();
			print "<script>window.location='home.php?module=profile&action=edit';</script>";
		}
		else if($reference=="addjob"){
			$job = new JobData();
			$job->title = $_POST['title'];
			$job->description = $_POST['description'];
			$job->skills = $_POST['skills'];
			$job->user_id = Session::getUID();
			$job->area_id = $_POST['area_id'];
			$job->jobtype_id = $_POST['jobtype_id'];
			$job->jobperiod_id = $_POST['jobperiod_id'];
			$job->duration = $_POST['duration'];
			if($job->add()){
				print "<script>window.location='home.php?module=jobs';</script>";
			}else {
				print "<script>window.location='home.php?module=jobs&error=add';</script>";
			}		
		}
/////////////////////////////////////////////////////////////
		else if($reference=="adduser"){
			$user = new UserData();
			$user->name = $_POST['name'];
			$user->lastname = $_POST['lastname'];
			$user->plate = $_POST['plate'];
			$user->mail = $_POST['mail'];
			$user->password = sha1(md5($_POST['password']));
			$user->usertype_id = $_POST['usertype_id'];
			$user->status_id = $_POST['status_id'];
			if($user->add()){
				print "<script>window.location='admin.php?module=user';</script>";
			}else {
				print "<script>window.location='admin.php?module=user&error=add';</script>";
			}		
		}
/////////////////////////////////////////////////////////////
		else if($reference=="addtip"){
			$tip = new TipData();
			$tip->title = $_POST['title'];
			$tip->content = $_POST['content'];
			$tip->tags = $_POST['tags'];
			if($tip->add()){
				print "<script>window.location='home.php';</script>";
			}else {
				print "<script>window.location='home.php?error=add';</script>";
			}		
		}
/////////////////////////////////////////////////////////////
		else if($reference=="sendmessage"){
			$user=null;
			if(isset($_POST['user'])){
				$mail = $_POST['user'];
				$user = UserData::getByMail($mail);
			}else if(isset($_POST['receiver_id'])){
				$user = UserData::getById($_POST['receiver_id']);				
			}
			if($user!=null){
			$title = $_POST['title'];
			$content = $_POST['content'];
			
			$md = new MessageData();
			$md->receiver_id = $user->id;
			$md->title = $title;
			$md->content = $content;

			$notification = new NotificationData();
			$notification->user_id = $user->id ;
			$notification->prospect_id = Session::getUID() ;
			$notification->content = "<a href='view.php?module=profile&id=".Session::getUID()."'>".UserData::getById(Session::getUID())->name."</a> te ha enviado un mensage.</a>";
			$notification->add();

			if(isset($_POST['receiver_id'])){				
				print "<script>window.location='home.php?module=message&sendby=".$_POST['receiver_id']."&action=read';</script>";
			}

			setcookie("sendsuccess","good");
			if($md->add()){
				print "<script>window.location='home.php?module=message&action=new';</script>";
			}else {
				print "<script>window.location='home.php?module=message&action=new&error=add';</script>";
			}
		}else{
			setcookie("badmail","bad");
			print "<script>window.location='home.php?module=message&action=new';</script>";			
		}
	}

/////////////////////////////////////////////////////////////
		else if($reference=="selectprospect"){
			$job_id = $_POST['job_id'];
			$user_id = $_POST['user_id'];
			$job = JobData::getById($job_id);
			$job->is_finished = 1;
			$job->update();

			$ujob = UserJobData::getByJobId($job_id);
			$ujob->is_selected = 1;
			$ujob->update();

			$notification = new NotificationData();
			$notification->user_id = $ujob->user_id ;
			$notification->prospect_id = Session::getUID() ;
			$notification->content = "La empresa <a href='view.php?module=profile&id=".Session::getUID()."'>".UserData::getById(Session::getUID())->name."</a> te ha seleccionado para ejecutar el trabajo de <a href='view.php?module=job&id=".$job->id."'>".$job->title.".</a>";
			$notification->add();

//			print_r($ujob);
			if($job->add()){
				print "<script>window.location='home.php?module=job&id=".$job_id."';</script>";
			}else {
				print "<script>window.location='home.php?module=job&id=".$job_id."&error=add';</script>";
			}		

		}

/////////////////////////////////////////////////////////////
		else if($reference=="postulate"){
			$job = JobData::getById($_POST['job_id']);

			$ujob = new UserJobData();
			$ujob->job_id = $_POST['job_id'];
			$notification = new NotificationData();
			$notification->user_id = $job->user_id ;
			$notification->prospect_id = Session::getUID() ;
			$notification->content = "El usuario <a href='view.php?module=profile&id=".Session::getUID()."'>".UserData::getById(Session::getUID())->name."</a> se ha postulado para tu oferta de empleo <b>".$job->title.".</b>";
			$notification->add();


			if($ujob->add()){
				print "<script>window.location='home.php?module=alljobs';</script>";
			}else {
						print "<script>window.location='home.php?module=alljobs&error=add';</script>";
			}		
		}

		else if ($reference=="addimage"){

		$handle = new Upload($_FILES['image']);
		$imfound = false;
    	if ($handle->uploaded) {
    		$url="res/storage/".Session::getUID()."/profile/";
        	print_r($handle->Process($url));
        	$handle->Process($url);
        	$ud = UserData::getById(Session::getUID());
        	$ud->image = $handle->file_dst_name;
			if($ud->update()){
				print "<script>window.location='home.php?module=configuration&action=image';</script>";
			}else {
				print "<script>window.location='home.php?module=configuration&action=image&error=add';</script>";
			}
		}
	}
///////////////
		else if ($reference=="addcurriculum"){

		$handle = new Upload($_FILES['curriculum']);
		$imfound = false;
    	if ($handle->uploaded) {
    		$url="res/storage/".Session::getUID()."/curriculum/";
        	print_r($handle->Process($url));
        	$handle->Process($url);
        	$ud = ProfileData::getByUID(Session::getUID());
        	$ud->curriculum = $handle->file_dst_name;
			if($ud->update()){
				print "<script>window.location='home.php?module=configuration&action=curriculum';</script>";
			}else {
				print "<script>window.location='home.php?module=configuration&action=curriculum&error=add';</script>";
			}
		}
	}

///////////////
		}else {
		if($reference=="register"){
			$p = new UserData();
			$p->name = $_POST['name'];
			$p->mail = $_POST['mail'];
			$p->password = sha1(md5($_POST['password']));
			$p->usertype_id = $_POST['usertype_id'];
			$p->add();
			setcookie('maillogged',$p->mail);
			print "<script>window.location='index.php?module=wellcome';</script>";
		}
		// acciones para usuarios no logeados
	}
}
else {
	echo "no hay referencia";
}

?>
