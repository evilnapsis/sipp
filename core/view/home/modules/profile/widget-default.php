<div class='row'>
<div class='span9'>
<?php
if(!isset($_GET['action'])){
	include "action/_view_.php";
}else {
	$action = $_GET['action'];
	if($action!="view" && $action!="edit" && $action!="curriculum"){
	}else {
		include "action/_".$action."_.php";		
	}
}
?>
<br><br>
</div>
<div class='span3'>
<?php 
if(ProfileData::getByUID(Session::getUID())==null){
	print "<div class='river-bg pd20 white'>";
	print "Recuerda que debes elegir el tipo de perfil de acuerdo para lo que vas a usar tu cuenta <b>Yubup</b>!";
	print "<br><br>Nuestras Reglas de juego por el momento son sencillas : ";
?><br><br>
<ul type="none">
	<li><i class='icon-ok'></i> Las <b>Empresas</b> pueden publicar empleos e identificar sus miembros.</li>
	<li><i class='icon-ok'></i> Las <b>Personas</b> pueden aceptar ofertas de empleo.</li>
</ul>
<p>Estamos trabajando para ofrecer mas servicios.</p>
<?php
	print "</div>";
}else{
?>
		<ul class="nav nav-tabs nav-stacked">
		  <li><a href='home.php?module=profile&action=edit'>Editar Perfil</a></li>
		  <li><a href='home.php?module=profile&action=edit'>Ubicacion</a></li>
		  <li><a href='home.php?module=profile&action=curriculum'>Curriculum</a></li>
		  <li><a href='home.php?module=profile&action=edit'>Redes Sociales</a></li>
		</ul>
<?php
}
//print_r(ProfileData::getByUID(Session::getUID()));
?>
</div>
</div>