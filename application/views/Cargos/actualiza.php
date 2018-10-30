<p>&nbsp;</p>

<div class="container">
  <h1>Actualiza Cargo</h1> 
  <a href="<?php echo base_url() ?>Cargos/" style="font-size:20px;color:#007bff;"><i class="fas fa-arrow-left"></i> Regresar </a>
  <p>&nbsp;</p>
        <form action="<?php echo base_url() ?>Cargos/agregarCargo" method="post">
              <label>Descripción</label>
              <input type="text" class="form-control" name="descripcion" id="descripcion" placeholder="Nombres del Cargo" required >
              <label>Estado</label>
              <select class="form-control" name="estado" id="estado" required >
                  <option value="1">Activo</option>
                  <option value="0">Inactivo</option>
              </select><br/>
              <button class="btn btn-primary btn-block" type="submit">Registrar Insumo</button> 
        </form>
</div>
