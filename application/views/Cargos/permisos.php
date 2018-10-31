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
          foreach ($permisos as $row){
      ?>
        <option  value="<?php echo $row->id ?>"><?php echo $row->descripcion ?></option>
      <?php 
         } 
      ?>
     </select>
  </form>
  
    <br/>
    <hr/>
    <label style="color:#bdc3c7">Lista de Permisos</label>
    <div class="row">
      <?php
          foreach ($misPermisos as $row){
      ?>
            <div class="col-9"><?php echo $row->descripcion ?></div>
            <div class="col-3" align="center">
              <a href="<?php echo base_url() ?>Cargos/eliminaPermiso(<?php echo $cargoId ?>,<?php echo $row->id ?>)" style="font-size:20px;color:#007bff;cursor: pointer;">
                <i class="fas fa-trash"></i>
              </a>
            </div>
      <?php 
           } 
      ?>
    </div>
    <p>&nbsp;</p> 
</div>
