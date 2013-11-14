<h2 class='roboto'>Administradores Activos</h2>
	<table class='table table-bordered table-hover'>
<?php foreach(UserData::getAdmins() as $user):?>
<tr>
	<td>
<div class="btn-group pull-right">
  <a class="btn dropdown-toggle  btn-mini btn-inverse" data-toggle="dropdown" href="#">
    <i class='icon-cog'></i>
    <span class="caret"></span>
  </a>
  <ul class="dropdown-menu">
  	<li><a href=''>Editar</a></li>
  	<li><a href=''>Bloquear</a></li>
  	<li><a href=''>Eliminar</a></li>
  </ul>
</div>
<h3 class='roboto'><?php echo $user->name." ".$user->lastname;?></h3>
<p class='roboto'>Matricula: <?php echo $user->plate?></p>
<span class="label label-success"><?php echo $user->status_id->name; ?></span>
	</td>

</tr>
<?php endforeach; ?>
</table>
