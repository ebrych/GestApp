<br/>
<div class="container">
  <h1>Agregar Locales</h1> 
  <a href="<?php echo base_url() ?>Locales/" style="font-size:20px;color:#007bff;"><i class="fas fa-arrow-left"></i> Regresar </a>
    <p>&nbsp;</p>
  
    <form action="<?php echo base_url() ?>Locales/agregarLocal" method="post">
              <label>Nombre</label>
              <input type="text" class="form-control" name="nombre"  placeholder="Nombres del local" required >
              <label>Dirección</label>
              <input type="text" class="form-control" name="direccion"  placeholder="Dirección" required >
              <label>Teléfono</label>
              <input type="text" class="form-control" name="telefono" placeholder="Teléfono" >
              <label>Estado</label>
              <select class="form-control" name="estado" required>
                  <option value="1">Activo</option>
                  <option value="0">Inactivo</option>
              </select><br/>
              <button class="btn btn-primary btn-block" type="submit">Registrar Local</button> 
    </form>
        
  
</div>