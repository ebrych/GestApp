<p>&nbsp;</p>

<div class="container"> 
  <h1>Agregar Personal</h1> 
  <a href="<?php echo base_url() ?>Personal/" style="font-size:20px;color:#007bff;"><i class="fas fa-arrow-left"></i> Regresar </a>
  <p>&nbsp;</p>
  <form action="<?php echo base_url() ?>Personal/agregaPersonal" method="post">
              <label>Nombre</label>
              <input type="text" class="form-control" name="nombre"  placeholder="Nombres Completos" required >
              <label>Email</label>
              <input type="email" class="form-control" name="email" placeholder="Correo Electrónico" required >
              <label>Telefono</label>
              <input type="text" class="form-control" name="telefono" placeholder="Teléfono" >
              <label>Local</label>
              <select class="form-control" name="local"  required >
                  <?php
                    foreach ($locales as $row){
                  ?>
                    <option value="<?php echo $row->id ?>"><?php echo $row->nombres ?></option>
                  <?php 
                    } 
                  ?>
              </select>
              <label>Cargo</label>
              <select class="form-control" name="cargo"  required >
                  <?php
                    foreach ($cargos as $row){
                  ?>
                    <option value="<?php echo $row->id ?>"><?php echo $row->descripcion ?></option>
                  <?php 
                    } 
                  ?>
              </select>
              <label>Estado</label>
              <select class="form-control" name="estado" required >
                  <option value="1">Activo</option>
                  <option value="0">Inactivo</option>
              </select><br/>
              <button class="btn btn-primary btn-block" type="submit">Registrar Personal</button> 
   </form>
</div>
