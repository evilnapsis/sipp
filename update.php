<?php
include "core/bootstrap.inc";

if(isset($_POST['reference'])){
	session_start();
	if(Session::getUID()!=""){
		// acciones para usuarios logeados
		$reference = $_POST['reference'];
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
			$p->update();
			print "<script>window.location='home.php?module=profile&action=edit';</script>";
		}
	}else {
		// acciones para usuarios no logeados
	}
}else {
	echo "no hay referencia";
}

?>