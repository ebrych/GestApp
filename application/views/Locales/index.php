<br/>
<div class="container">
  <h1>Locales</h1> 
    <a href="<?php echo base_url() ?>Locales/nuevo" style="font-size:20px;color:#007bff;"><i class="fas fa-plus-circle"></i> Agregar Local</a>
    <p>&nbsp;</p>
  
    <div class="list-group">
        <?php
            foreach ($locales as $row){
        ?>
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="row">
                <div class="col-8">
                    <h5 class="nombre" style="font-weight: bold;font-size:25px"> <?php echo $row->nombres ?></h5>
                    <i class="fas fa-map-marker-alt"></i> <?php echo $row->direccion ?> &nbsp;&nbsp;|&nbsp;&nbsp;
                    <i class="fas fa-phone-square"></i> <?php echo $row->telefono ?> &nbsp;&nbsp;|&nbsp;&nbsp;<br/>
                    <i class="fab fa-font-awesome-flag"></i> <?php echo $row->estado ?>
                </div>
                <div class="col-4" align="right">
                    <i class="fas fa-pen" onclick="hrefToAct(1,<?php echo $row->id ?>)" style="font-size: 20px;color:#007bff;"></i>
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
        location.href="<?php echo base_url() ?>Locales/actualiza/"+id;
      }
  }
</script>