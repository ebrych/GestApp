<br/>

<div class="container">
  <h1>Agregar Tarea</h1> 
  <a href="<?php echo base_url() ?>Tarea/" style="font-size:20px;color:#007bff;"><i class="fas fa-arrow-left"></i> Regresar </a>
<br/><br/>


    <form action="<?php echo base_url() ?>Tareas/agregarTarea" method="post">
          <label>Cliente</label>
            <select class="form-control" name="cliente"  required >
                <?php
                    foreach($clientes as $row){
                ?>
                    <option value="<?php echo $row->id ?>" ><?php echo $row->nombres ?></option>
                <?php
                } 
                ?>
            </select>
          <label>Fecha</label>  
          <input type="date" class="form-control" name="fecha" value="<?php echo $hoy ?>"   />
          <label>Hora</label>  
          <input type="time" class="form-control" name="hora" value="<?php echo $hora ?>"   />
           
          <label>Estados</label>
            <select class="form-control" name="estado" required >
              <option value="1" selected>Activo</option>
              <option value="0">Inactivo</option>
            </select><br/>
            <button class="btn btn-primary btn-block" type="submit">Registrar Tarea</button> 
    </form>


</div>