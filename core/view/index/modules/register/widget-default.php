<div class='row'>
	<div class='span6'>
<div class='emerald-bg white pd20 roboto'>
	<h3>Personas</h3>
	<h4>Cuenta creada a la medida de cualquiera con herramientas de busqueda de empleo personalizadas.</h4>
	<h4>La cuenta para personas permite recibir las oportunidades de trabajo, oportunidades de colaborar con otras personas, crear tu portafolio online.</h4>
</div>

<br><div class='belize-hole-bg white pd20 roboto'>
	<h3>Empresas</h3>
	<h4>Cuenta ideada para tener un perfil de calidad de miembros y recibir las mejores recomendaciones.</h4>
	<h4>Las cuenta para Empresas les habilita crear ofertas de trabajo, seleccionar personal, ofrecer empleo directamente.</h4>
</div>

	</div>
	<div class='span6'>
<div class='river-gb pd20' style='background:#3498db;'>
    <h3 class='roboto white' style='margin-left:20px;'>Crear Cuenta Yobup</h3>
<form class="form-horizontal" method="post" action="add.php" id="regx">
  <div class="control-group">
    <label class="control-label" for="inputEmail">Nombre Completo</label>
    <div class="controls">
      <input type="text" name="name" class='inpt' id="name" placeholder="Escribe tu Nombre">
    </div>
  </div>

    <div class="control-group">
    <label class="control-label" for="inputPassword">Correo Electronico</label>
    <div class="controls">
      <input type="text" name="mail" class='inpt' id="mail" placeholder="Escribe tu Correo Electronico">
    </div>
  </div>
    <div class="control-group">
    <label class="control-label" for="inputPassword">Contrase&ntilde;a</label>
    <div class="controls">
      <input type="password" class='inpt' name="password" id="password"  placeholder="Tu password para entrar">
    </div>
  </div>
    <div class="control-group">
    <label class="control-label" for="inputPassword" >Confirmar Contrase&ntilde;a</label>
    <div class="controls">
      <input type="password" class='inpt' name="confirm" id="confirm"  placeholder="Confirmar password.">
      <input type="hidden" name="reference" value="register">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail">Tipo de Cuenta</label>
    <div class="controls">
    	<select name='usertype_id' class='inpt' id="usertype" style='width:100%;'>
    		<option value="">-- Selecciona un Tipo de Cuenta ---</option>
    	<?php
    		$areas  = UserTypeData::getAll();
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
    <div class="controls">
      <button type="submit" class="btn btn-success btn-large">Crear Cuenta Yobup</button>
    </div>
  </div>
</form><br>
<script>
$('#regx').submit(function(e){
  e.preventDefault();
    $('#name').css({'background':'white'});
    $('#mail').css({'background':'white'});
    $('#password').css({'background':'white'});
    $('#confirm').css({'background':'white'});
    $('#usertype').css({'background':'white'});

  if($('#name').val()!="" && $('#mail').val()!="" && $('#password').val()!="" && $('#confirm').val()!="" && $('#usertype').val()!=""){
//    alert("debes agregar un nombre;");
  }
  else if($('#name').val()==""){
    $('#name').css({'background':'red'});
  e.preventDefault();
  }
  else if($('#mail').val()==""){
    $('#mail').css({'background':'red'});
  e.preventDefault();
  }
  else if($('#password').val()==""){
    $('#password').css({'background':'red'});
  e.preventDefault();
  }
  else if($('#confirm').val()==""){
    $('#confirm').css({'background':'red'});
  e.preventDefault();
  }
  else if($('#usertype').val()==""){
    $('#usertype').css({'background':'red'});
  e.preventDefault();
  }



})
</script>
        </div>
</div>
</div>