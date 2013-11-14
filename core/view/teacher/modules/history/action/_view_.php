<div class='f28 river'>Historial de pruebas</div><br>
		<table class='table table-bordered table-hover'>
		<?php foreach(TestDoData::getAllByUser(Session::getUID()) as $test):?>
		<tr>
			<td>
				<div class="btn-group pull-right">
				  <a class="btn dropdown-toggle  btn-mini" data-toggle="dropdown" href="#">
				    <i class='icon-cog'></i>
				    <span class="caret"></span>
				  </a>
				  <ul class="dropdown-menu">
				  	<li><a href=''>Eliminar Prueba</a></li>
				  </ul>
				</div>
				<h3 class='roboto'><a href='home.php?module=history&action=result&id=<?php echo $test->id; ?>' style='color:black;text-decoration:none;'><?php echo $test->getTestData()->name;?></a></h3>
				<h5 class='roboto'><?php echo $test->created_at;?></h5>
			</td>
		</tr>
	<?php endforeach;?>
		</table>