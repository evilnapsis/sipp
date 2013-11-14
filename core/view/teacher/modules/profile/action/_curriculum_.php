<?php
?>

<div class='alizarin-bg pd20 white roboto'>
<h3>Tu Curriculum</h3>
<p>Te invitamos a que publiques tu curriculum, es un requisito para poder enlistarte en las ofertas de empleo.</p>
<br><br>
<?php if($pd->curriculum==null):?>
<form enctype="multipart/form-data" method='post' action='add.php'  id='addprod'>
	<input type='hidden' name='reference' value='addcurriculum'>
	<input class="wide file input" id="curriculum" type="file" name='curriculum' placeholder="Distintiva" />
	<input type='submit' value='Subir Curriculum' class='btn btn-danger pull-right'>
</form>
<?php endif;?>
</div>
