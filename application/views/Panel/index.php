<p>&nbsp;</p><p>&nbsp;</p>

<div class="container">
    <div class="row">
    <?php
        foreach ($permisos as $row){
    ?>
      <div class="col-6 col-md-3">
            <div class="card">
                <a href="<?php echo base_url().$row->controlador ?>" style="color:#3a3a3a;text-decoration:none;">
                <div class="card-body" align="center">
                    <i class="<?php echo $row->icono ?>" style="font-size:28px"></i>
                    <br/>
                    <?php echo $row->descripcion ?>
                </div>
                </a>
            </div>
            <br/>
      </div>
    <?php 
        } 
    ?>
    </div>
</div>







