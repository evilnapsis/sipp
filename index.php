<?php
include "core/bootstrap.inc";
session_start();
?>
<html>
<head>
	<title>SIPP - Sistema de Identificacion de Perfil Psicologico</title>
	<link rel='stylesheet' type='text/css' href='res/flatstrap/css/bootstrap.css'>
	<link rel='stylesheet' type='text/css' href='res/flatstrap/css/bootstrap-responsive.css'>
	<link rel='stylesheet' type='text/css' href='res/style/main.css'>
	<link rel='stylesheet' type='text/css' href='res/style/effect.css'>
	<link rel='stylesheet' type='text/css' href='res/style/cards.css'>
	<!-- -->

<link rel="stylesheet" type="text/css" href="res/lib/css/prettify.css"></link>
<link rel="stylesheet" type="text/css" href="res/src/bootstrap-wysihtml5.css"></link>
<link rel="stylesheet" type="text/css" href="res/lineicons/style.css"></link>
<script src='jquery.min.js'></script>
<script src='res/scripts/modernizr.custom.js'></script>

</head>
<body>
	<div class='container'>
		<div class='row'>
			<div class='span6'>
				<h2 class='roboto river'><a href='index.php' style='color:black;text-decoration:none;'>SIPP <small>Sistema de Identificacion de Perfil Psicologico</small></a></h2>
			</div>
			<div class='span6'>
<br>				
<div class="btn-group pull-right">

  <a href='index.php?module=login' class='btn btn-primary'><i class='icon-signin'></i> Iniciar Session</a>
</div>
<div class='clearfix'></div>
<br>
			</div>
		</div>
		<?php
		if(!isset($_GET['module'])){
			include "core/view/index/modules/start/widget-default.php";
		}else {
			$module = $_GET['module'];
			if($module!="index"&& $module!="login" && $module!="wellcome" && $module!="explore" && $module!="register" && $module!="start" && $module!="signout"){

			}else {
				include "core/view/index/modules/".$module."/widget-default.php";				
			}
		}
		?>
	</div>
<script src='res/bootstrap/js/bootstrap.js'></script>

</body>
</html>