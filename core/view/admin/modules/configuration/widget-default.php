<div class='row'>
	<div class='span8'>
<?php
if(!isset($_GET['action'])){
	include "action/_view_.php";
}else {
	$action = $_GET['action'];
	if($action!="view" && $action!="image"){
	}else {
		include "action/_".$action."_.php";		
	}
}
?>
	</div>
	<div class='span4'><br><br>
		<ul class="nav nav-tabs nav-stacked">
		  <li><a href='home.php?module=configuration'>Configuracion</a></li>
		  <li><a href='home.php?module=configuration&action=image'>Cambiar Imagen de Perfil</a></li>
		  <li><a href=''>Cambiar Contrase&ntilde;a</a></li>
		  <li><a href='home.php?module=profile&action=edit'>Editar Perfil</a></li>
		</ul>
	</div>
</div>
