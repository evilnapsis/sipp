<?php
?>

<div class='river-bg pd20 white roboto'>
	<h2 class='white roboto'>Agregar Usuario</h2>
<form class="form-horizontal" method="post" action="add.php">
  <div class="control-group">
    <label class="control-label" for="inputEmail">Nombre </label>
    <div class="controls">
      <input type="text" id="inputEmail" name="name" placeholder="Nombre">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Apellido</label>
    <div class="controls">
      <input type="text" id="" name="lastname" placeholder="Apellido">
    </div>
  </div>
<div class="control-group">
    <label class="control-label" for="">Matricula</label>
    <div class="controls">
      <input type="text" id="" name="plate" placeholder="Matricula">
    </div>
  </div>
<div class="control-group">
    <label class="control-label" for="">Correo Electronico</label>
    <div class="controls">
      <input type="text" id="" name="mail" placeholder="Email">
    </div>
  </div>
<div class="control-group">
    <label class="control-label" for="inputtext">Contrase&ntilde;a</label>
    <div class="controls">
      <input type="password" id="inputPassword" name="password" placeholder="Password">
    </div>
  </div>
<div class="control-group">
    <label class="control-label" for="inputtext">Tipo de Usuario</label>
    <div class="controls">
      <select name="usertype_id" style='width:100%'>
      	<?php foreach(UserTypeData::getAll() as $ut):?>
      	<option value="<?php echo $ut->id; ?>"><?php echo $ut->name; ?></option>
      <?php endforeach; ?>
      </select>
    </div>
  </div>
<div class="control-group">
    <label class="control-label" for="inputtext">Estado</label>
    <div class="controls">
      <select name="status_id" style='width:100%'>
      	<?php foreach(StatusData::getAll() as $ut):?>
      	<option value="<?php echo $ut->id; ?>"><?php echo $ut->name; ?></option>
      <?php endforeach; ?>
      </select>
    </div>
  </div>  <div class="control-group">
    <div class="controls">
    	<input type='hidden' name='reference' value='adduser'>
      <button type="submit" class="btn btn-primary btn-large">Agregar Usuario</button>
    </div>
  </div>
</form>
</div>
