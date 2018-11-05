<br/>
<div class="container">
<h1>Personal</h1>

  <div class="list-group">
        <?php
            foreach ($personal as $row){
        ?>
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="row">
                <div class="col-8">
                    <h5 class="nombre" style="font-weight: bold;font-size:25px"> <?php echo $row->nombres ?></h5>
                    <i class="fas fa-address-card"></i> <?php echo $row->cargo ?> &nbsp;&nbsp;|&nbsp;&nbsp;
                    <i class="fas fa-user-check"></i> <?php echo $row->reporte ?>
                </div>
                <div class="col-4" align="right">
                    <i class="fas fa-user-check" onclick="hrefToAct('<?php echo $row->id ?>')" style="font-size: 20px;color:#007bff;"></i>
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
    location.href="<?php echo base_url() ?>Marcaciones/agregarMarcacion/"+id;
  }
</script>
