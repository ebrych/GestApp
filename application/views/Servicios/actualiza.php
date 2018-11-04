 <br/>
 <div class="container">
  <h1>Actualiza Cargo</h1> 
  <a href="<?php echo base_url() ?>Servicios/" style="font-size:20px;color:#007bff;"><i class="fas fa-arrow-left"></i> Regresar </a>
  <p>&nbsp;</p>
        
    <form action="<?php echo base_url() ?>Servicios/actualizaDato" method="post">
          <input type="text" class="form-control" name="idServicio" value="<?php echo $servicio[0]->id; ?>" style="display:none" required >
          <label>Nombre</label>
          <input type="text" class="form-control" name="descripcion" value="<?php echo $servicio[0]->descripcion; ?>"  placeholder="Descripcion" required >
          <label>Categoria</label>
          <select class="form-control" name="categoria"  required >
            <option value="" disabled selected>Categoria Precio</option>
            <?php
            foreach ($tipoPrecio as $row){
                if($servicio[0]->idCategoriaPrecio==$row->id){ $select="selected";}else { $select="";}
            ?>
            <option value="<?php echo $row->id ?>" <?php echo $select ?> ><?php echo $row->descripcion ?></option>
            <?php 
            } 
            ?>

          </select>
          <label>Costo</label>
          <input type="text" class="form-control" name="costo" value="<?php echo $servicio[0]->costo; ?>" placeholder="S/." required >
          <label>Estado</label>
          <select class="form-control" name="estado"  required >
            <?php
                    $act="";
                    $des="";
                    if($servicio[0]->estado==1){
                      $act="selected";
                      $des="";
                    }else{
                      $act="";
                      $des="selected";
                    }
            ?>
            <option value="1" <?php echo $act ?>>Activo</option>
            <option value="0" <?php echo $des ?>>Inactivo</option>
          </select><br/>
          <button class="btn btn-primary btn-block" type="submit">Registrar Servicio</button>
    </form>

</div>