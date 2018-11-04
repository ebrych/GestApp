<br/>

<div class="container">
  <h1>Agregar Cargo</h1> 
  <a href="<?php echo base_url() ?>Servicios/" style="font-size:20px;color:#007bff;"><i class="fas fa-arrow-left"></i> Regresar </a>
    <form action="<?php echo base_url() ?>Servicios/agregaServicio" method="post">
          <label>Nombre</label>
          <input type="text" class="form-control" name="descripcion"  placeholder="Descripcion" required >
          <label>Categoria</label>
          <select class="form-control" name="categoria"  required >
            <option value="" disabled selected>Categoria Precio</option>
            <?php
            foreach ($tipoPrecio as $row){
            ?>
            <option value="<?php echo $row->id ?>"><?php echo $row->descripcion ?></option>
            <?php 
            } 
            ?>

          </select>
          <label>Costo</label>
          <input type="text" class="form-control" name="costo" id="costo" placeholder="S/." required >
          <label>Estado</label>
          <select class="form-control" name="estado" id="estado" required >
            <option value="1" selected>Activo</option>
            <option value="0">Inactivo</option>
          </select><br/>
          <button class="btn btn-primary btn-block" type="submit">Registrar Servicio</button>
    </form>
</div>
