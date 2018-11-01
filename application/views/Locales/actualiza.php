<br/>
<div class="container">
  <h1>Actualización de Datos de Locales</h1> 
  <a href="<?php echo base_url() ?>Locales/" style="font-size:20px;color:#007bff;"><i class="fas fa-arrow-left"></i> Regresar </a>
    <p>&nbsp;</p>
  
    <form action="<?php echo base_url() ?>Locales/actualizaDato" method="post">
              <input type="text" class="form-control" name="idLocal"  style="display:none" value="<?php echo $local[0]->id ?>" required>
              <label>Nombre</label>
              <input type="text" class="form-control" name="nombre" value="<?php echo $local[0]->nombres ?>"  placeholder="Nombres del local" required >
              <label>Dirección</label>
              <input type="text" class="form-control" name="direccion" value="<?php echo $local[0]->direccion ?>"  placeholder="Dirección" required >
              <label>Teléfono</label>
              <input type="text" class="form-control" name="telefono" value="<?php echo $local[0]->telefono ?>" placeholder="Teléfono" >
              <label>Estado</label>
              <select class="form-control" name="estado" required>
                  <?php 
                    $act="";
                    $des="";
                    if($local[0]->idEstado==1){
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
              <button class="btn btn-primary btn-block" type="submit">Registrar Local</button> 
    </form>
        
  
</div>