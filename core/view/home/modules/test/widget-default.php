<?php
if(!isset($_GET['action'])){
	include "action/_view_.php";
}else {
	$action = $_GET['action'];
	if($action!="view" && $action!="8colors" && $action!="16fp"){
	}else {
		include "action/_".$action."_.php";		
	}
}
?>