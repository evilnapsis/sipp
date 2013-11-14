<?php
$p = ProfileData::getByUID(Session::getUID());
?>
<?php if($ud->usertype->id==UserTypeData::getByName("persona")->id):?>
<div class='river-gb' style='background:#3498db;'><br>
    <h3 class='roboto white' style='margin-left:20px;'>Actualizar Perfil</h3>
<?php if($p==null):?>
<form class="form-horizontal" method="post" action="add.php">
<?php else: ?>
<form class="form-horizontal" method="post" action="update.php">

<?php endif;?>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Titulo</label>
    <div class="controls">
      <input type="text" name="title" value="<?php if($p!=null){echo $p->title;}?>" placeholder="De que trabajas ? ">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Biografia</label>
    <div class="controls">
        <textarea name='biografy' placeholder='Quien eres?? que has echo??'><?php if($p!=null){echo $p->biografy;}?></textarea>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Area</label>
    <div class="controls">
    	<select name='area_id' style='width:100%;'>
    		<option value="">-- Selecciona un Area ---</option>
    	<?php
    		$areas  = AreaData::getAll();
    		foreach($areas as $area){
    			$selected = "";
    			if($p!=null){
    				if($area->id==$p->area->id){ $selected="selected=\"selected\""; }
    			}
    			echo "<option class='wide' value=\"".$area->id."\" $selected>".$area->name."</option>";
    		}
    	?>
	    </select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Habilidades</label>
    <div class="controls">
        <textarea name='skills' placeholder="Lo que sabes hacer separado por comas (cocinar, hacer pasteles, apagar incendios, ...)"><?php if($p!=null){echo $p->skills;}?></textarea>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Area</label>
    <div class="controls">
    	<select name='country_id' style='width:100%;' value="<?php if($p!=null){echo $p->country->id;}?>">
    	<?php
    		$areas  = CountryData::getAll();
    		foreach($areas as $area){
    			$selected2 = "";
    			if($p!=null){
    				if($area->id==$p->area->id){ $selected2="selected=\"selected\""; }
    			}
    			echo "<option class='wide' value=\"".$area->id."\" $selected2>".$area->name."</option>";
    		}
    	?>
	    </select>
    </div>
  </div>

    <div class="control-group">
    <label class="control-label" for="inputPassword">Direccion</label>
    <div class="controls">
      <input type="text" name="address" value="<?php if($p!=null){echo $p->address;}?>" placeholder="Donde te pueden localizar tus contactos.">
    </div>
  </div>
    <div class="control-group">
    <label class="control-label" for="inputPassword">Numero Telefonico</label>
    <div class="controls">
      <input type="text" name="phone" value="<?php if($p!=null){echo $p->phone;}?>" placeholder="Aque numero te pueden llamar?">
    </div>
  </div>
    <div class="control-group">
    <label class="control-label" for="inputPassword" >Sitio Web</label>
    <div class="controls">
      <input type="text" name="website" value="<?php if($p!=null){echo $p->website;}?>" placeholder="La direccion de tu sitio web personal.">
      <input type="hidden" name="reference" value="profile">
    </div>
  </div>


  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-success btn-large">Actualizar Perfil</button>
    </div>
  </div>
</form><br>
        </div>
<?php elseif($ud->usertype->id==UserTypeData::getByName("empresa")->id):?>
<div class='river-gb' style='background:#3498db;'><br>
    <h3 class='roboto white' style='margin-left:20px;'>Actualizar Perfil de la Empresa</h3>
<?php if($p==null):?>
<form class="form-horizontal" method="post" action="add.php">
<?php else: ?>
<form class="form-horizontal" method="post" action="update.php">

<?php endif;?>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Titulo de la empresa</label>
    <div class="controls">
      <input type="text" name="title" value="<?php if($p!=null){echo $p->title;}?>" placeholder="Aque se dedica la empresa en pocas palabras ? ">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Biografia de la Empresa</label>
    <div class="controls">
        <textarea name='biografy' placeholder='Descripcion de la empresa'><?php if($p!=null){echo $p->biografy;}?></textarea>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Area de la Empresa</label>
    <div class="controls">
      <select name='area_id' style='width:100%;'>
        <option value="">-- Selecciona un Area ---</option>
      <?php
        $areas  = AreaData::getAll();
        foreach($areas as $area){
          $selected = "";
          if($p!=null){
            if($area->id==$p->area->id){ $selected="selected=\"selected\""; }
          }
          echo "<option class='wide' value=\"".$area->id."\" $selected>".$area->name."</option>";
        }
      ?>
      </select>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Habilidades de la Empresa</label>
    <div class="controls">
        <textarea name='skills' placeholder="Lo que hace la empresa separado por comas (reparacion de tuberias, mantenimiento de equipo de refrigeracion, ...)"><?php if($p!=null){echo $p->skills;}?></textarea>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Pais</label>
    <div class="controls">
      <select name='country_id' style='width:100%;' value="<?php if($p!=null){echo $p->country->id;}?>">
      <?php
        $areas  = CountryData::getAll();
        foreach($areas as $area){
          $selected2 = "";
          if($p!=null){
            if($area->id==$p->area->id){ $selected2="selected=\"selected\""; }
          }
          echo "<option class='wide' value=\"".$area->id."\" $selected2>".$area->name."</option>";
        }
      ?>
      </select>
    </div>
  </div>

    <div class="control-group">
    <label class="control-label" for="inputPassword">Direccion de la Empresa</label>
    <div class="controls">
      <input type="text" name="address" value="<?php if($p!=null){echo $p->address;}?>" placeholder="Donde se localizar la empresa.">
    </div>
  </div>
    <div class="control-group">
    <label class="control-label" for="inputPassword">Numero Telefonico de la Empresa</label>
    <div class="controls">
      <input type="text" name="phone" value="<?php if($p!=null){echo $p->phone;}?>" placeholder="A que numero les pueden contactar?">
    </div>
  </div>
    <div class="control-group">
    <label class="control-label" for="inputPassword" >Sitio Web de la Empresa</label>
    <div class="controls">
      <input type="text" name="website" value="<?php if($p!=null){echo $p->website;}?>" placeholder="La direccion del sitio web de la empresa.">
      <input type="hidden" name="reference" value="profile">
    </div>
  </div>


  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-success btn-large">Actualizar Perfil</button>
    </div>
  </div>
</form><br>
        </div>

<?php endif; ?>