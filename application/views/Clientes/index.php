<br/>
<div class="container" id="list">
  <h1>Clientes</h1> 
    <a href="<?php echo base_url() ?>Clientes/nuevo" style="font-size:20px;color:#007bff;"><i class="fas fa-plus-circle"></i> Agregar Cliente</a>
    <p>&nbsp;</p>
    
    <div class="list-group">
        <div class="list">
        <?php
            foreach ($clientes as $row){
        ?>
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="row">
                <div class="col-8">
                    <h5 class="nombre" style="font-weight: bold;font-size:25px"> <?php echo $row->nombres ?></h5>
                    <i class="fab fa-font-awesome-flag"></i> <?php echo $row->email ?>  &nbsp;&nbsp;|&nbsp;&nbsp;
                    <i class="fas fa-phone-square"></i> <?php echo $row->telefono ?> &nbsp;&nbsp;|&nbsp;&nbsp;
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
    
    
</div>


<script>
  function hrefToAct(id){
    location.href="<?php echo base_url() ?>Clientes/actualiza/"+id;
  }
  //listJS
  var options = {
  valueNames: [ 'nombre' ],
  page: 4,
  pagination: true
  };
  var listJs = new List('list', options);
</script>
