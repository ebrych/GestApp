<br/>
<div class="container">
  <h1>Personal para la tarea </h1> 
  <a href="<?php echo base_url() ?>Tareas/index?dateData=<?php echo $fecha ?>" style="font-size:20px;color:#007bff;"><i class="fas fa-arrow-left"></i> Regresar </a>
  <br/><br/>
  <form action="<?php echo base_url() ?>Tareas/agregaPersonalTarea" method="post"  >
        <input type="text" class="form-control" name="idtarea" style="display: none"  value="<?php echo $tareaId ?>" />
        <label style="color:#bdc3c7">Cliente</label>
        <input type="text" class="form-control" name="cliente"   value="<?php echo $cliente ?>" readonly />
        <label style="color:#bdc3c7">Fecha</label>
        <input type="date" class="form-control" name="fecha"   value="<?php echo $fecha ?>" readonly />
        <label style="color:#bdc3c7">Personal</label>
        <select class="form-control" name="idpersonal" required>
            <?php
            foreach ($personal as $row) {
            ?>
                <option value="<?php echo $row->id ?>"><?php echo $row->nombres ?></option>
            <?php
            } 
            ?>
        </select><br/>
        <button class="btn btn-primary btn-block" type="submit">Agregar Personal</button>
    </form>
    <br/>
    <hr/>
        <label style="color:#bdc3c7">Lista de Servicios</label>
        <?php
            if($misPersonal==null){
                echo "<center>No tiene registrano personal</center>";
            }else{
                foreach($misPersonal as $row){      
        ?>
          <div class="row">
            <div class="col-9"><?php echo $row->nombres ?></div>
            <div class="col-3" align="center"> <a href="<?php echo base_url() ?>Tareas/eliminaPersonalTarea/<?php echo $tareaId ?>/<?php echo $row->idUser ?>/<?php echo $fecha ?>/<?php echo $cliente ?>"><i class="fas fa-trash"></i></a> </div>
          </div>
        <?php
                }
            } 
        ?>
</div>