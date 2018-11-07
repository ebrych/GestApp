<br/>
<div class="container" id="list">
  <h1>Reservas</h1> 
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
            foreach ($reservas as $row){
        ?>
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="row">
                <div class="col-8">
                    <h5 class="nombre" style="font-weight: bold;font-size:25px"> <?php echo $row->nombres ?></h5>
                    <i class="fas fa-phone-square"></i> <?php echo $row->telefono ?><br/>
                    <i class="fas fa-map-marker-alt"></i> <?php echo $row->local ?> &nbsp;&nbsp;|&nbsp;&nbsp;
                    <i class="fas fa-calendar-alt"></i> <?php echo $row->fechaAtencion ?> &nbsp;&nbsp;|&nbsp;&nbsp;
                    <i class="fas fa-clock"></i> <?php echo $row->horaAtencion ?>
                </div>
                <div class="col-4" align="right">
                  <i class="fas fa-check-circle" onclick="hrefToAct(1,<?php echo $row->id ?>)" style="font-size: 20px;color:#007bff;"></i>
                  <i class="fas fa-ban" onclick="hrefToAct(2,<?php echo $row->id ?>)" style="font-size: 20px;color:#007bff;"></i>
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
  function hrefToAct(controlador,id){
      if(controlador==1){
        location.href="<?php echo base_url() ?>Reservas/confirmReserva/"+id;
      }else if(controlador==2){
        location.href="<?php echo base_url() ?>Reservas/cancelaReserva/"+id;
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
