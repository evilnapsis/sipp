</div>
<?php
if(Session::getUID()!=""){
  print "<script>window.location='home.php';</script>";
}
?>
<div class='emerald-bg white'>
<div class='container'>
<div class='row'>
  <div class='span6'>
    <div class='box roboto'>
      <h3>Tu perfil psicologico</h3>
    </div>
    <br>
    <br><br>
  </div>
  <div class='span6'>
    <center><h3 class='roboto'>Entrar a SIPP</h3></center>
<br><form class="form-horizontal" method="post" action="login.php">
  <div class="control-group">
    <label class="control-label" for="inputEmail">MATRICULA</label>
    <div class="controls">
      <input type="text" name="mail" placeholder="Email">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputPassword">Password</label>
    <div class="controls">
      <input type="password" name="password" placeholder="Password">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <label class="checkbox">
        <input type="checkbox"> No cerrar sesion
      </label>
      <button type="submit" class="btn btn-success btn-large">Entrar a SIPP</button>
    </div>
  </div>
</form><br>


  </div>
</div>
</div>
</div>
<br><br>
<br><br>