<br/>
<div class="container" id="list">
  <h1>Servicios</h1> 
    <a href="<?php echo base_url() ?>Servicios/nuevo" style="font-size:20px;color:#007bff;"><i class="fas fa-plus-circle"></i> Agregar Cargo</a>
    <p>&nbsp;</p>
  <div class="row">
        <div class="col col-lg-6" style="padding:0px"></div>
        <div class="col col-lg-6" style="padding:0px">
          <div class="input-group mb-2 mr-sm-2">
          <div class="input-group-prepend">
            <div class="input-group-text" style="background-color:#ffffff"><i class="fas fa-search"></i></div>
          </div>
          <input type="text" class="form-control search" placeholder="Filtrar">
          </div>
        </div>
    </div>
  
    <div class="list-group">
        <div class="list">
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
         <div align="right"><ul class="pagination"></ul></div>
        </div>
    </div>
  
</div>


<script>
  function hrefToAct(id){
    location.href="<?php echo base_url() ?>Servicios/actualiza/"+id;   
  }
   //listJS
  var options = {
  valueNames: [ 'nombre' ],
  page: 4,
  pagination: true
  };
  var listJs = new List('list', options);
</script>
