<br/>
<div class="container">
  <h1>Actualiza Cargo</h1> 
  <a href="<?php echo base_url() ?>Cargos/" style="font-size:20px;color:#007bff;"><i class="fas fa-arrow-left"></i> Regresar </a>
  <p>&nbsp;</p>
      <form action="<?php echo base_url() ?>Cargos/actualizaDato" method="post">
            <input type="text" class="form-control" name="idCargo" value="<? echo $cargo[0]->id ?>" style="display:none" required >
            <label>Descripción</label>
            <input type="text" class="form-control" name="descripcion" value="<? echo $cargo[0]->descripcion ?>" placeholder="Nombres del Cargo" required >
            <label>Estado</label>
            <select class="form-control" name="estado" value="<? echo $cargo[0]->cargoEstId ?>" required >
            <?php
                    $act="";
                    $des="";
                    if($cargo[0]->idEstado==1){
                      $act="selected";
                      $des="";
                    }else{
                      $act="";
                      $des="selected";
                    }
            ?>
            <option value="1" <?php echo $act ?>>Activo</option>
            <option value="0" <?php echo $des ?>>Inactivo</option>
                  
            </select><br/>  
            <button class="btn btn-primary btn-block" type="submit">Guardar</button> 
      </form>
</div>


<?php 
