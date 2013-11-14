<div class='f28 roboto'>Todos los Alumnos</div><br>
<ul class="nav nav-tabs nav-stacked">

<?php 
$users = UserTeamData::getAllByTeamId($grp->id);
if(count($users)>0){
	foreach($users as $usr):
		$u = $usr->getUser();
		?>

	<li><a href=''><?php echo $u->name." ".$u->lastname; ?></a></li>
<?php endforeach;
}else{ ?>
<?php
}
?>
</ul>