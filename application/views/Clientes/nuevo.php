<p>&nbsp;</p>

<div class="container">
  <h1>Agregar Cliente</h1> 
  <a href="<?php echo base_url() ?>Cliente/" style="font-size:20px;color:#007bff;"><i class="fas fa-arrow-left"></i> Regresar </a>
  <p>&nbsp;</p>
  
  <form action="<?php echo base_url() ?>Cliente/agregaCliente" method="post">
            <label>Nombre:</label>
            <input type="text" class="form-control" name="nombre" id="nombre"   required >
            <label>Email:</label>
            <input type="text" class="form-control" name="email" id="email"  required >
            <label>Teléfono:</label>
            <input type="text" class="form-control" name="telefono" id="telefono" >
            <br/>
            <button class="btn btn-primary btn-block" type="submit">Guardar Cliente</button> 
  </form>
  
</div>
