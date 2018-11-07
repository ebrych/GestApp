<p>&nbsp;</p>
<div class="container">
<h1>Actualización de Datos Personal</h1> 
  <a href="<?php echo base_url() ?>Personal/" style="font-size:20px;color:#007bff;"><i class="fas fa-arrow-left"></i> Regresar </a>
  <p>&nbsp;</p>
  <form action="<?php echo base_url() ?>Personal/actualizaDato" method="post">
              <input type="text" class="form-control" name="idUsuario" style="display:none"  value="<?php echo $personal[0]->id ?>" required >
              <label>Nombre</label>
              <input type="text" class="form-control" name="nombre"  value="<?php echo $personal[0]->nombres ?>" required >
              <label>Email</label>
              <input type="email" class="form-control" name="email" value="<?php echo $personal[0]->email ?>" required >
              <label>Telefono</label>
              <input type="text" class="form-control" name="telefono" value="<?php echo $personal[0]->telefono ?>" >
              <label>Local</label>
              <select class="selectpicker" style="width:100%" name="local"  required>
                  <?php
                    $select="";
                    foreach ($locales as $row){ 
                      if($personal[0]->idLocal==$row->id){ $select="selected";}else { $select="";}
                  ?>
                    <option value="<?php echo $row->id ?>" <?php echo $select; ?> ><?php echo $row->nombres ?></option>
                  <?php 
                    } 
                  ?>
              </select>
              <label>Cargo</label>
              <select class="selectpicker" style="width:100%" name="cargo"  required>
                  <?php
                    $select="";
                    foreach ($cargos as $row){
                      if($personal[0]->idCargo==$row->id){ $select="selected";}else { $select="";}
                  ?>
                    <option value="<?php echo $row->id ?>" <?php echo $select; ?> ><?php echo $row->descripcion ?></option>
                  <?php 
                    } 
                  ?>
              </select>
              <label>Estado</label>
              <select class="form-control" name="estado" required  value="<?php echo $personal[0]->idEstado ?>" >
                  <?php 
                    $act="";
                    $des="";
                    if($personal[0]->idEstado==1){
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
              <button class="btn btn-primary btn-block" type="submit">Registrar Personal</button> 
   </form>
  
</div>
