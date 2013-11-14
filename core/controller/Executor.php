<?php

class Executor {

	public static function doit($sql){
		$con = Database::getCon();
		return $con->query($sql);
	}

	public static function doid($sql){
		$con = Database::getCon();
		return array($con->query($sql),$con->insert_id);
	}

}
?>