<?php
include "core/bootstrap.inc";
session_start();
$ud = UserData::getById(Session::getUID());

?>

<html>
<head>
	<title>SIPP - Sistema de Identificacion de Perfil Psicologico</title>
	<link rel='stylesheet' type='text/css' href='res/flatstrap/css/bootstrap.css'>
	<link rel='stylesheet' type='text/css' href='res/flatstrap/css/bootstrap-responsive.css'>
	<link rel='stylesheet' type='text/css' href='res/style/main.css'>
	<link rel='stylesheet' type='text/css' href='res/style/cards.css'>

	<!-- -->

<link rel="stylesheet" type="text/css" href="res/lib/css/prettify.css"></link>
<link rel="stylesheet" type="text/css" href="res/src/bootstrap-wysihtml5.css"></link>
<link rel="stylesheet" type="text/css" href="res/lineicons/style.css"></link>
<script src='jquery.min.js'></script>

</head>
<body>
	<div class="navbar navbar-inverse navbar-fixed-top" style="position: static;">
              <div class="navbar-inner">
                <div class="container">
                  <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </a>
                  <a class="brand" href="admin.php">SIPP</a>
                  <div class="nav-collapse collapse navbar-inverse-collapse">
                    <ul class="nav">
                      <li class="active"><a href="admin.php">Inicio</a></li>
                    </ul>
                    <ul class="nav pull-right">
                      <li><a href="#"><i class='icon-bell f20'></i></a></li>
                      <li class="divider-vertical"></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Admin <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="#">Panel General</a></li>
                          <li><a href="#">Configuracion</a></li>
                          <li class="divider"></li>
                          <li><a href="logout.php">Salir</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div><!-- /.nav-collapse -->
                </div>
              </div><!-- /navbar-inner -->
            </div><!-- /navbar -->
	<div class='container'><br>
		<div class='row'>
			
			
		</div>
		<?php
		if(!isset($_GET['module'])){
			include "core/view/admin/modules/index/widget-default.php";
		}else {
			$module = $_GET['module'];
			if($module!="index"&& $module!="login" && $module!="user" && $module!="team"&&$module!="sems" && $module!="configuration"&& $module!="test"){
			}else {
				include "core/view/admin/modules/".$module."/widget-default.php";				
			}
		}
		?>
	</div>
	<script src='jquery.min.js'></script>
	<script src='res/flatstrap/js/bootstrap.min.js'></script>
	<script>
	$('.tip').tooltip();
	</script>

</body>
</html>