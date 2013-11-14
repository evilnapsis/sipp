<?php
$grp = TeamData::getById($_GET['id']);
?>
<div class='row'>
	<div class='span12'>
	<a href='admin.php?module=user&action=add' class='btn btn-primary pull-right'><i class='icon-user'></i> Agregar Usuario</a>
		<div class='roboto f28 bold'> Grupo <?php echo $grp->grade_id." ".$grp->name; ?></div>
	<div class='clearfix'></div><br>
	</div>
</div>
<div class='row'>
<div class='span3'>
<ul class="nav nav-tabs nav-stacked">
      <li><a href='#'>Alumnos</a></li>
      <li><a href='#'>Profesores</a></li>
      <li><a href='#'>Estadisticas</a></li>
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