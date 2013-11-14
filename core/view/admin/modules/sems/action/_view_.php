<div class='f28 roboto'>Todos los Grupos</div><br>
<p class='alert alert-info'>Al seleccionar un grupo se dirigira al panel de control del grupo.</p>
<ul class="nav nav-tabs nav-stacked">
<?php foreach(TeamData::getAll() as $grp):?>
	<li><a href='admin.php?module=team&id=<?php echo $grp->id; ?>'><?php echo $grp->grade_id." ".$grp->name; ?></a></li>
<?php endforeach; ?>
</ul>