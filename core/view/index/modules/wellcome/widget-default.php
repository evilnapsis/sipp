</div>
<?php if(isset($_COOKIE['maillogged'])):?>
<div class='emerald-bg'>
<div class='container'>
	<div class='row'>
		<div class='span8'>
			<h1 class='roboto white'>Cuenta creada exitosamente</h1><br>
			<h4 class='nephritis-bg white roboto pd20'>Te informamos que tu cuenta <b>Yobup</b> ha sido creada exitosamente, hemos enviado un mensaje al correo electronico que nos proporcionaste : <span class='emerald-bg nephritis'><?php echo $_COOKIE['maillogged']; ?></span> en el cual se te han enviado instrucciones para activar tu cuenta y continuar con nuestro servicio.
<br><br>
			</h4>
<div class='nephritis-bg pd20 white'>
	Recuerda que debes elegir el tipo de perfil de acuerdo para lo que vas a usar tu cuenta <b>Yubup</b>!
	<br><br>Nuestras Reglas de juego por el momento son sencillas :
<br><br>
<ul type="none">
	<li><i class='icon-ok'></i> Las <b>Empresas</b> pueden publicar empleos e identificar sus miembros.</li>
	<li><i class='icon-ok'></i> Las <b>Personas</b> pueden aceptar ofertas de empleo.</li>
</ul>
<p>Estamos trabajando para ofrecer mas servicios.</p>
</div>
		</div>
		<div class='span4'>
			<center><div class='c-box nephritis-bg'><br><br>
				<h4 class='roboto white algn-cntr' style='font-size:100px;'><i class='icon-thumbs-up'></i></h4>
			</div></center>
			<center><div class='c-box nephritis-bg'><br><br>
				<h4 class='roboto white algn-cntr' style='font-size:100px;'><i class='icon-globe'></i></h4>
			</div></center>

<br><br><br>

		</div>
	</div>
			<br>
<br><br><br>
	</div>
</div>
</div>
<br>
<br>
<br>
<br>

<?php 
setcookie('maillogged','',time()-18600);
else:
print "<script>window.location='index.php?module=login';</script>";
endif;?>