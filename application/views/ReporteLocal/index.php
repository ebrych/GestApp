<br/>
<div class="container" id="list">
  <h1>Reporte de Locales</h1>
  <a href="<?php echo base_url() ?>Welcome/Panel" style="font-size:20px;color:#007bff;"><i class="fas fa-arrow-left"></i> Regresar </a> 
  <p>&nbsp;</p>
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
          <input type="text" class="form-control search" placeholder="Filtrar">
        </div>
  </div>
  <br/>
  <div class="list-group">
        <div class="list">
        <?php
            foreach ($locales as $row){
        ?>
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="row">
                <div class="col-8">
                    <h5 class="nombre" style="font-weight: bold;font-size:25px"> <?php echo $row['nombre'] ?></h5>
                    <i class="fas fa-map-marker"></i> <?php echo $row['direccion'] ?><br/>
                    <i class="far fa-clock"></i> Actividad del mes: <?php echo $row['actividad'] ?>
                </div>
                <div class="col-4" align="right">
                  &nbsp;
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
  //listJS
  var options = {
  valueNames: [ 'nombre' ],
  page: 4,
  pagination: true
  };
  var listJs = new List('list', options);
</script>