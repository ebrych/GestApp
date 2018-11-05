<br/>
<div class="container">
  <h1>Reporte de Productividad</h1>
  <div class="row">
        <div class="col-sm">
            <form action="<?php echo base_url() ?>ReporteLocal/index" method="get" >
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
        <?php
            foreach ($personal as $row){
        ?>
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="row">
                <div class="col-8">
                    <h5 class="nombre" style="font-weight: bold;font-size:25px"> <?php echo $row->usuario ?></h5>
                    <i class="fas fa-address-card"></i> <?php echo $row->cargo ?>
                    <i class="fas fa-map-marker"></i> <?php echo $row->local ?>
                    <i class="far fa-clock"></i> Actividad del mes: <?php echo $row->actividad ?>
                </div>
                <div class="col-4" align="right">
                  &nbsp;
                </div>
            </div>
        </a>
        <?php 
            } 
        ?>
        
    </div>
  
</div>