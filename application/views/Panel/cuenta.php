<br/>
<div class="container">
  <h1>Datos de la cuenta</h1> 
  <a href="<?php echo base_url() ?>Welcome/Panel" style="font-size:20px;color:#007bff;"><i class="fas fa-arrow-left"></i> Regresar </a>
  <br/><br/>
  <form action="<?php echo base_url() ?>Panel/actualizaDato" method="post">
  <label>Nombre</label>
  <input class="form-control" name="nombres" value="<?php echo $dtos["nombre"]; ?>" />
  <label>Correo Electrónico</label>
  <input class="form-control" name="mail" value="<?php echo $dtos["mail"] ?>" />
  <label>Nueva Contraseña</label>
  <input class="form-control" name="pass" />
  <br/>
  <button class="btn btn-primary btn-block" type="submit">Guardar</button>
  </form>

</div>
 