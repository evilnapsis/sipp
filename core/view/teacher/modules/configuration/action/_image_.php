<?php
if($ud->image==null){
?>
<h2 class='roboto'>Agregar Imagen de Perfil</h2>
<div class='river-bg pd20'>
	<p class='white'>Selecciona la imagen para tu perfil y haz click en el boton "Agregar Imagen".</p>
<form enctype="multipart/form-data" method='post' action='add.php'  id='addprod'>
	<input type='hidden' name='reference' value='addimage'>
	<input class="wide file input" id="image" type="file" name='image' placeholder="Distintiva" />
	<input type='submit' value='Agregar Imagen' class='btn btn-primary pull-right'>
</form>
</div>
<?php
}
else{
?>
<h2 class='roboto'>Cambiar Imagen de Perfil</h2>
<div class='profile-image'>
<?php
$url="res/storage/".Session::getUID()."/profile/".$ud->image;
print "<center><img src='$url'></center>";
?>
</div><br><br><br>
<?php

}
?>