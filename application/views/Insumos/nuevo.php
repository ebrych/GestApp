<br/>
<div class="container">
  <h1>Agregar Insumo</h1> 
  <a href="<?php echo base_url() ?>Insumos/" style="font-size:20px;color:#007bff;"><i class="fas fa-arrow-left"></i> Regresar </a>
  <p>&nbsp;</p>
  
  <form action="<?php echo base_url() ?>Insumos/agregarInsumo" method="post">
              <label>Nombre:</label>
              <input type="text" class="form-control" name="nombre"  placeholder="Nombres del Insumo" required>
              <label>Descripción:</label>
              <input type="text" class="form-control" name="descripcion"  placeholder="Descripcion" required>
              <label>Estado:</label>
              <select class="form-control" name="estado" required>
                  <option value="1">Activo</option>
                  <option value="0">Inactivo</option>
              </select><br/>
              <button class="btn btn-primary btn-block" type="submit">Registrar Insumo</button> 
   </form>
  
  
  
</div>
