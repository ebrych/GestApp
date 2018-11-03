<br/>
<div class="container">
  <h1>Actualiza Insumo</h1> 
  <a href="<?php echo base_url() ?>Insumos/" style="font-size:20px;color:#007bff;"><i class="fas fa-arrow-left"></i> Regresar </a>
  <p>&nbsp;</p>
  
  <form action="<?php echo base_url() ?>Insumos/actualizaDato" method="post">
              <input type="text" class="form-control" name="idInsumo" value="<?php echo insumo[0]->id ?>"   placeholder="Nombres del Insumo" required>
              <label>Nombre:</label>
              <input type="text" class="form-control" name="nombre" value="<?php echo insumo[0]->nombre ?>"  placeholder="Nombres del Insumo" required>
              <label>Descripción:</label>
              <input type="text" class="form-control" name="descripcion" value="<?php echo insumo[0]->descripcion ?>" placeholder="Descripcion" required>
              <label>Estado:</label>
              <select class="form-control" name="estado" required>
              <?php 
                    $act="";
                    $des="";
                    if($insumo[0]->idEstado==1){
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
              <button class="btn btn-primary btn-block" type="submit">Registrar Insumo</button> 
   </form>
  
  
  
</div>
