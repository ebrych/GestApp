<p>&nbsp;</p>
<div class="container">
  <h1>Cargos</h1> 
    <a href="<?php echo base_url() ?>Cargos/nuevo" style="font-size:20px;color:#007bff;"><i class="fas fa-plus-circle"></i> Agregar Cargo</a>
    <p>&nbsp;</p>
  
    <div class="list-group">
        <?php
            foreach ($cargos as $row){
        ?>
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="row">
                <div class="col-8">
                    <h5 class="nombre" style="font-weight: bold;font-size:25px"> <?php echo $row->descripcion ?></h5>
                    <i class="fab fa-font-awesome-flag"></i> <?php echo $row->estado ?> &nbsp;&nbsp;|&nbsp;&nbsp;
                </div>
                <div class="col-4" align="right">
                    <i class="fas fa-pen" onclick="hrefToAct(1,<?php echo $row->id ?>)" style="font-size: 20px;color:#007bff;"></i>
                    <i class="fas fa-key" onclick="hrefToAct(2,<?php echo $row->id ?>)" style="font-size: 20px;color:#007bff;cursor: pointer;"></i>
                </div>
            </div>
        </a>
        <?php 
            } 
        ?>
        
    </div>
  
</div>


<script>
  function hrefToAct(controlador,id){
      if(controlador==1){
        location.href="<?php echo base_url() ?>Cargos/actualiza/"+id;
      }else if(controlador==2){
        location.href="<?php echo base_url() ?>Cargos/agregarCargo/"+id;
      }
      
  }
</script>
