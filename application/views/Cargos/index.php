<br/>
<div class="container" id="list">
  <h1>Cargos</h1> 
    <a href="<?php echo base_url() ?>Cargos/nuevo" style="font-size:20px;color:#007bff;"><i class="fas fa-plus-circle"></i> Agregar Cargo</a>
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
            foreach ($cargos as $row){
        ?>
          <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="row">
                <div class="col-8">
                    <h5 class="nombre" style="font-weight: bold;font-size:25px"> <?php echo $row->descripcion ?></h5>
                    <i class="fab fa-font-awesome-flag estado"></i> <?php echo $row->estado ?>
                </div>
                <div class="col-4" align="right">
                    <i class="fas fa-pen" onclick="hrefToAct(1,<?php echo $row->id ?>)" style="font-size: 20px;color:#007bff;"></i>
                    <i class="fas fa-key" onclick="hrefToAct(2,<?php echo $row->id ?>,'<?php echo $row->descripcion ?>')" style="font-size: 20px;color:#007bff;"></i>
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
  function hrefToAct(controlador,id,nombre){
      if(controlador==1){
        location.href="<?php echo base_url() ?>Cargos/actualiza/"+id;
      }else if(controlador==2){
        location.href="<?php echo base_url() ?>Cargos/permisos/"+id+"/"+nombre;
      }
      
  }
  //listJS
  var options = {
  valueNames: [ 'nombre' ],
  page: 4,
  pagination: true
  };
  var listJs = new List('list', options);
</script>
