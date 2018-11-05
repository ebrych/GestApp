<br/>
<div class="container">
    <h1>Finalización de tarea </h1> 
    <a href="<?php echo base_url() ?>Tareas/index?dateData=<?php echo $fecha ?>" style="font-size:20px;color:#007bff;"><i class="fas fa-arrow-left"></i> Regresar </a>
    <br/><br/>

    <label style="color:#bdc3c7">Esta Seguro de terminar la Tarea</label>
    <?php
        foreach($resumen as $row){ 
    ?>
        <div class="row">
            <div class="col-6">
              <?php echo $row->servicio ?>
            </div>
            <div class="col">
            <?php echo $row->categoria ?>
            </div>
            <div class="col">
              S/. <?php echo $row->costo ?>
            </div>
        </div>
    <?php 
        }
    ?>
        <br/>
        <form action="<?php echo base_url() ?>Tareas/cierraTarea" method="post" >
            <input type="text" class="form-control" name="idTarea" value="<?php echo $tarea ?>"  style="display:none" />
            <input type="text" class="form-control" name="fecha" value="<?php echo $fecha ?>"  style="display:none" />
            <button class="btn btn-primary btn-block" type="submit">Finalizar Tarea</button>
        </form>

</div>