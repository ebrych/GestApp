<br/>
<div class="container">
  <h1>Servicios para la tarea </h1> 
  <a href="<?php echo base_url() ?>Tareas/index?dateData=<?php echo $fecha ?>" style="font-size:20px;color:#007bff;"><i class="fas fa-arrow-left"></i> Regresar </a>
  <br/><br/>

    <form action="<?php echo base_url() ?>Tareas/agregarServicioTarea" method="post"  >
        <input type="text" class="form-control" name="idtarea" style="display: none"  value="<?php echo $tareaId ?>" />
        <label style="color:#bdc3c7">Cliente</label>
        <input type="text" class="form-control" name="cliente"   value="<?php echo $cliente ?>" readonly />
        <label style="color:#bdc3c7">Fecha</label>
        <input type="date" class="form-control" name="fecha"   value="<?php echo $fecha ?>" readonly />
        <label style="color:#bdc3c7">Servicios</label>
        <select class="form-control" name="idservicio" required>
            <?php
            foreach ($servicios as $row) {
            ?>
                <option value="<?php echo $row->id ?>"><?php echo $row->servicio ." &nbsp;&nbsp;|&nbsp;&nbsp; ". $row->categoria ." &nbsp;&nbsp;|&nbsp;&nbsp; S/. ". $row->costo ?></option>
            <?php
            } 
            ?>
        </select><br/>
        <button class="btn btn-primary btn-block" type="submit">Agregar Servicio</button>
    </form>
    <br/>
    <hr/>
        <label style="color:#bdc3c7">Lista de Servicios</label>
        <?php
            if($misServicio==null){
                echo "<center>No tiene registrano servicios</center>";
            }else{
                foreach($misServicio as $row){      
        ?>
          <div class="row">
            <div class="col-9"><?php echo $row->descripcion ?></div>
            <div class="col-3" align="center"> <a href="<?php echo base_url() ?>Tareas/eliminaServicioTarea/<?php echo $tareaId ?>/<?php echo $row->idServicio ?>/<?php echo $fecha ?>/<?php echo $cliente ?>"><i class="fas fa-trash"></i></a> </div>
          </div>
        <?php
                }
            } 
        ?>
</div>