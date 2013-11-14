<div class='row'>
	<div class='span3'>
	<br><ul class="nav nav-tabs nav-stacked">
      <li><a href='home.php?module=history'><b>Historial</b></a></li>
      <li><a href=''>Vision General</a></li>
      <li><a href=''>Pruebas</a></li>
      <li><a href=''>Graficas</a></li>
    </ul>
	</div>
	<div class='span9'>
<?php
if(!isset($_GET['action'])){
	include "action/_view_.php";
}else {
	$action = $_GET['action'];
	if($action!="view" && $action!="result" ){
	}else {
		include "action/_".$action."_.php";		
	}
}
?>

	</div>
</div>