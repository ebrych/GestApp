<p>&nbsp;</p>

<div class="container">
  <h1>Permisos del cargo</h1> 
  <a href="<?php echo base_url() ?>Cargos/" style="font-size:20px;color:#007bff;"><i class="fas fa-arrow-left"></i> Regresar </a>
  <p>&nbsp;</p>
  <form>
    <input class="form-control" name="cargo" value="<?php echo $cargoId; ?>" style="display: none" required >
    <lable>Nombre del Cargo:</lable>
    <input class="form-control" name="nombreCargo" value="<?php echo $cargoNombre; ?>" disabled required >
    <lable>Permisos</lable>
    <select class="form-control" name="permiso"  required>
      <?php
          foreach ($locales as $row){
      ?>
        <option  value="<?php echo $row->id ?>"><?php echo $row->descripcion ?></option>
      <?php 
         } 
      ?>
     </select>
  </form>
</div>
