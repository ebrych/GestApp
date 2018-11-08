<br/>
<div class="container">
  <h1>Datos de la cuenta</h1> 
  <a href="<?php echo base_url() ?>" style="font-size:20px;color:#007bff;"><i class="fas fa-arrow-left"></i> Regresar </a>
  <p>&nbsp;</p>
  <form action="<?php echo base_url() ?>Panel/actualizaDato" method="post">
  <label>Nombre</label>
  <input class="form-control" name="nombres" value="<?php echo $count["nombre"] ?>" />
  <label>Correo Electrónico</label>
  <input class="form-control" name="mail" value="<?php echo $count["mail"] ?>" />
  <label>Nueva Contraseña</label>
  <input class="form-control" name="pass" />
  <label>Repita la Contraseña</label>
  <input class="form-control" name="passRep" />
  <button class="btn btn-primary btn-block" type="submit">Guardar</button>
  </form>

</div>
 