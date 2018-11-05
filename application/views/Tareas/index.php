<br/>
<div class="container">
  <h1>Tareas del día</h1> 
    <a href="<?php echo base_url() ?>Tareas/nuevo" style="font-size:20px;color:#007bff;"><i class="fas fa-plus-circle"></i> Agregar Tarea</a>
    <p>&nbsp;</p>
    <div class="row">
        <div class="col-sm">
            <form action="<?php echo base_url() ?>Tareas/index" method="get" >
            <div class="input-group">
                <input type="date" class="form-control" name="dateData" value="<?php echo $hoy; ?>">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit" id="button-addon3">Buscar</button>
                </div>
              </div>
            </form>
        </div>
        <div class="col-sm"></div> 
        <div class="col-sm" align="right">
          filtros
        </div>
    </div>



    <div class="list-group">
    <p>&nbsp;</p>
    <?php 
    if($tareas==null){
        ?>
            <div class="row">
                <div class="col-12" align="center">
                    <h5 class="nombre" style="font-weight: bold;font-size:25px"> No hay tareas para el dia de hoy</h5>                    
                </div>
            </div>
        <?php
    }else{
        foreach ($tareas as $row){
        ?>
            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="row">
                <div class="col-8">
                    <h5 class="nombre" style="font-weight: bold;font-size:25px"> <?php echo $row->cliente ?></h5>
                    <i class="fas fa-warehouse"></i> <?php echo $row->local ?>  &nbsp;&nbsp;|&nbsp;&nbsp;
                    <i class="fas fa-calendar-alt"></i> <?php echo $row->fecha ?> <br/>
                    <i class="fab fa-font-awesome-flag"></i> <?php echo $row->estado ?>

   
                    
                </div>
                <div class="col-4" align="right">
                <i class="fas fa-hands-helping" onclick="hrefToAct('1',<?php echo $row->id ?>,'<?php echo $row->fecha ?>','<?php echo $row->cliente ?>')" style="font-size: 20px;color:#007bff;"></i>&nbsp;
                    <i class="fas fa-users" onclick="hrefToAct('2',<?php echo $row->id ?>,'<?php echo $row->fecha ?>','<?php echo $row->cliente ?>')" style="font-size: 20px;color:#007bff;"></i>&nbsp;
                    <i class="far fa-money-bill-alt" onclick="hrefToAct('3',<?php echo $row->id ?>,'<?php echo $row->fecha ?>','none')" style="font-size: 20px;color:#007bff;"></i>&nbsp;
                    <i class="fas fa-receipt" onclick="hrefToAct('4',<?php echo $row->id ?>,'<?php echo $row->fecha ?>','none')" style="font-size: 20px;color:#007bff;"></i>&nbsp;
                    <i class="fas fa-ban" onclick="hrefToAct('5',<?php echo $row->id ?>,'<?php echo $row->fecha ?>','none')" style="font-size: 20px;color:#007bff;"></i>&nbsp;
                </div>
            </div>
            </a>
        <?php
        } 
    } 
    ?>
    </div>


</div>


<script>
function hrefToAct(controlador,id,fecha,nombre){
    if(controlador==1){
        location.href="<?php echo base_url() ?>Tareas/asignaServicio/"+id+"/"+fecha+"/"+nombre;
    }else if(controlador==2){
        location.href="<?php echo base_url() ?>Tareas/asignaPersonalTarea/"+id+"/"+fecha+"/"+nombre;
    }else if(controlador==3){
        location.href="<?php echo base_url() ?>Tareas/finalizaTarea/"+id+"/"+fecha;
    }else if (controlador==4){
        location.href="<?php echo base_url() ?>Tareas/comprobante/"+id+"/"+fecha;
    }else if (controlador==5){
        location.href="<?php echo base_url() ?>Tareas/cancelaTarea/"+id+"/"+fecha;
    }
}
</script>



      
