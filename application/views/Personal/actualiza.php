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
              <select class="form-control" name="local"  required value="<?php echo $personal[0]->idLocal  ?>">
                  <?php
                    foreach ($locales as $row){
                  ?>
                    <option value="<?php echo $row->id ?>"><?php echo $row->nombres ?></option>
                  <?php 
                    } 
                  ?>
              </select>
              <label>Cargo</label>
              <select class="form-control" name="cargo"  required value="<?php echo $personal[0]->idCargo ?>">
                  <?php
                    foreach ($cargos as $row){
                  ?>
                    <option value="<?php echo $row->id ?>"><?php echo $row->descripcion ?></option>
                  <?php 
                    } 
                  ?>
              </select>
              <label>Estado</label>
              <select class="form-control" name="estado" required  value="<?php echo $personal[0]->idEstado ?>" >
                  <option value="1">Activo</option>
                  <option value="0">Inactivo</option>
              </select><br/>
              <button class="btn btn-primary btn-block" type="submit">Registrar Personal</button> 
   </form>
  
</div>
