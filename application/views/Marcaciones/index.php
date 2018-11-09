<br/>
<div class="container" id="list">
<h1>Personal</h1>
<a href="<?php echo base_url() ?>Welcome/Panel" style="font-size:20px;color:#007bff;"><i class="fas fa-arrow-left"></i> Regresar </a> 
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
            foreach ($personal as $row){
            $id=$row["id"];
        ?>
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="row">
                <div class="col-8">
                    <h5 class="nombre" style="font-weight: bold;font-size:25px"> <?php echo $row["nombres"] ?></h5>
                    <i class="fas fa-address-card"></i> <?php echo $row["cargo"] ?> &nbsp;&nbsp;|&nbsp;&nbsp;
                    <i class="fas fa-user-check"></i> <?php echo $row["reporte"] ?>
                </div>
                <div class="col-4" align="right">
                    <i class="fas fa-user-check" onclick="hrefToAct('<?php echo $id ?>')" style="font-size: 20px;color:#007bff;"></i>
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
    location.href="<?php echo base_url() ?>Marcaciones/agregarMarcacion/"+id;
  }
  //listJS
  var options = {
  valueNames: [ 'nombre' ],
  page: 4,
  pagination: true
  };
  var listJs = new List('list', options);
</script>
