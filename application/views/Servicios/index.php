<p>&nbsp;</p>
<div class="container">
  <h1>Servicios</h1> 
    <a href="<?php echo base_url() ?>Servicios/nuevo" style="font-size:20px;color:#007bff;"><i class="fas fa-plus-circle"></i> Agregar Cargo</a>
    <p>&nbsp;</p>
  
    <div class="list-group">
        <?php
            foreach ($servicios as $row){
        ?>
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="row">
                <div class="col-8">
                    <h5 class="nombre" style="font-weight: bold;font-size:25px"> <?php echo $row->descripcion ?></h5>

                    <i class="fas fa-wallet"></i> <?php echo $row->categoria ?></i><br/>
                    <i class="fas fa-dollar-sign"></i>  <?php echo $row->costo ?></i><br/>
                    <i class="fab fa-font-awesome-flag"></i> <?php echo $row->estado ?></i>
                </div>
                <div class="col-4" align="right">
                    <i class="fas fa-pen" onclick="hrefToAct(<?php echo $row->id ?>)" style="font-size: 20px;color:#007bff;"></i>
                </div>
            </div>
        </a>
        <?php 
            } 
        ?>
    </div>
  
</div>


<script>
  function hrefToAct(id){
    location.href="<?php echo base_url() ?>Servicios/actualiza/"+id;   
  }
</script>