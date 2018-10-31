<p>&nbsp;</p>

<div class="container">
  <h1>Agregar Cliente</h1> 
  <a href="<?php echo base_url() ?>Cliente/" style="font-size:20px;color:#007bff;"><i class="fas fa-arrow-left"></i> Regresar </a>
  <p>&nbsp;</p>
  
  <form action="<?php echo base_url() ?>Cliente/actualizaDato" method="post">
            <input type="text" class="form-control" name="idCliente" value="<?php echo $cliente[0]->idCli ?>"  style="display:none"   required >
            <label>Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="<?php echo $cliente[0]->nombresCli ?>"  required >
            <label>Email:</label>
            <input type="text" class="form-control" name="email" value="<?php echo $cliente[0]->emailCli ?>"  required >
            <label>Teléfono:</label>
            <input type="text" class="form-control" name="telefono" value="<?php echo $cliente[0]->telefonoCli ?>" >
            <br/>
            <button class="btn btn-primary btn-block" type="submit">Guardar</button> 
  </form>
  
</div>
