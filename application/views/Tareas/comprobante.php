<br/>
<div class="container">
    <h1>Comprobante</h1> 
    <a href="<?php echo base_url() ?>Tareas/index?dateData=<?php echo $fecha ?>" style="font-size:20px;color:#007bff;"><i class="fas fa-arrow-left"></i> Regresar </a>
    <br/><br/>
    <div id="contenPrint">
        <div class="row">
                  <div class="col-lg">Serie: <?php echo $boleta[0]->serie ?></div>
                  <div class="col-lg">Número: <?php echo $boleta[0]->numero ?></div>
                  <div class="col-lg">Fecha y Hora: <?php echo $boleta[0]->fechaRegistro?></div>
              </div>
              <br/>
              <label style="color:#bdc3c7">Resumen</label>
              <?php
              foreach($resumen as $row){
              ?>
              <div class="row">
                  <div class="col-6">
                    <?php echo $row->servicio ?>
                  </div>
                  <div class="col">
                  <?php echo $row->categoria ?>
                  </div>
                  <div class="col">
                    S/. <?php echo $row->costo ?>
                  </div>
              </div>
              <?php 
                } 
              ?>
              <hr/>
              <div class="row">
                  <div class="col-6"></div>
                  <div class="col">SubTotal</div>
                  <div class="col">S/. <?php echo $totales['subtotal'] ?></div>
              </div>
              <div class="row">
                <div class="col-6"></div>
                <div class="col">Igv</div>
                <div class="col">S/. <?php echo $totales['igv'] ?></div>
              </div>
              <div class="row">
                <div class="col-6"></div>
                <div class="col">Total</div>
                <div class="col">S/. <?php echo $totales['total'] ?></div>
              </div>
    <!-- -->
    </div>
    <br/>
    <button class="btn btn-primary btn-block" type="button" id="btnPrint">Imprimir Comprobante</button>
</div>