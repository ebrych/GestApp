<p>&nbsp;</p>
<div class="container">
  <h1>Cargos</h1> 
    <a href="<?php echo base_url() ?>Clientes/nuevo" style="font-size:20px;color:#007bff;"><i class="fas fa-plus-circle"></i> Agregar Cliente</a>
    <p>&nbsp;</p>
    
    <div class="list-group">
        <?php
            foreach ($clientes as $row){
        ?>
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="row">
                <div class="col-8">
                    <h5 class="nombre" style="font-weight: bold;font-size:25px"> <?php echo $row->nombres ?></h5>
                    <i class="fab fa-font-awesome-flag"></i> <?php echo $row->email ?>  &nbsp;&nbsp;|&nbsp;&nbsp;
                    <i class=class="fas fa-phone-square"></i> <?php echo $row->telefono ?> &nbsp;&nbsp;|&nbsp;&nbsp;
                </div>
                <div class="col-4" align="right">
                    <i class="fas fa-pen" onclick="hrefToAct(1,<?php echo $row->id ?>,'SN')" style="font-size: 20px;color:#007bff;"></i>
                    <i class="fas fa-key" onclick="hrefToAct(2,<?php echo $row->id ?>,'<?php echo $row->descripcion  ?>')" style="font-size: 20px;color:#007bff;cursor: pointer;"></i>
                </div>
            </div>
        </a>
        <?php 
            } 
        ?>  
    </div>
    
    
</div>
