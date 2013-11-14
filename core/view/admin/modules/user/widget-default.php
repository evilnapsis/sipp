<div class='row'>
	<div class='span12'>
	<a href='admin.php?module=user&action=add' class='btn btn-primary pull-right'><i class='icon-user'></i> Agregar Usuario</a>
		<div class='roboto f28 bold'>Control de Usuarios</div>
	<div class='clearfix'></div><br>
	</div>
</div>
<div class='row'>
<div class='span3'>
<ul class="nav nav-tabs nav-stacked">
      <li><a href='#' style='color:black;'><b>Alumnos</b></a></li>
      <li><a href='admin.php?module=user'>Alumnos Activos</a></li>
      <li><a href='home.php?module=test&action=htp'>Alumnos Bloquados</a></li>
</ul>

<ul class="nav nav-tabs nav-stacked">
      <li><a href='#' style='color:black;'><b>Maestros</b></a></li>
      <li><a href='admin.php?module=user&action=teacher'>Maestros Activos</a></li>
</ul>

<ul class="nav nav-tabs nav-stacked">
      <li><a href='#' style='color:black;'><b>Administradores</b></a></li>
      <li><a href='admin.php?module=user&action=admin'>Administradores Activos</a></li>
</ul>
</div>
<div class='span9'>
  <?php
if(!isset($_GET['action'])){
  include "action/_view_.php";
}else {
  $action = $_GET['action'];
  if($action!="view" && $action!="edit" && $action!="add" && $action!="teacher" &&$action!="admin"){
  }else {
    include "action/_".$action."_.php";   
  }
}
?>


</div>
</div>
<br><br><br><br><br>