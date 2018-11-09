<p>&nbsp;</p>
<div class="container">
    <h1>Gestión de Página Web</h1> 
    <a href="<?php echo base_url() ?>Welcome/Panel" style="font-size:20px;color:#007bff;"><i class="fas fa-arrow-left"></i> Regresar </a> 
    <p>&nbsp;</p>
    <div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <!--titulo--><i class="fas fa-file-import" style="font-size:22px"></i> &nbsp;&nbsp;INFORMACIÓN
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
          <div align="right" ><a href="<?php echo base_url() ?>Web/nuevaEntrada" style="font-size:20px;text-decoration:none"><i class="fas fa-plus-circle"></i> Agregar entrada</a> </div>
          <br/>
          <?php foreach($informacion as $row){ ?>
            <div class="row" >
                <div class="col-sm-2">
                  Titulo:<br/> <?php echo $row->titulo ?>
                </div>
                <div class="col-sm-8">
                  Descripción:<br/> <?php echo $row->descripcion ?>
                </div>
                <div class="col-sm-1">
                  Orden: <?php echo $row->orden ?>
                </div>
                <div class="col-sm-1" align="right">
                  <div style="color:#007bff;cursor: pointer;">
                      <a href="<?php base_url() ?>Web/eliminarInformacion/<?php echo $row->id ?>" style="font-size:20px;"><i class="fas fa-trash-alt"></i></a>
                  </div>
                </div>
            </div>
          <?php } ?>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <!--titulo--><i class="fas fa-file-import" style="font-size:22px;text-decoration:none"></i> &nbsp;&nbsp;INFORMACIÓN
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
          <form action="<?php echo base_url() ?>Web/actualizaContacto" method="post" >
              <label>Telefono</label>
              <input type="text" class="form-control" name="numero" value="<?php echo $contacto[0]->numero ?>"  required >
              <label>Email</label>
              <input type="email" class="form-control" name="email" value="<?php echo $contacto[0]->mail ?>" required >
              <label>Dirección de Facebook</label>
              <input type="text" class="form-control" name="facebook" value="<?php echo $contacto[0]->facebook ?>" required >
              <label>Dirección de Instagram</label>
              <input type="text" class="form-control" name="instagram" value="<?php echo $contacto[0]->instagram ?>" required >
              <br/>
              <button class="btn btn-primary btn-block" type="submit">Guardar</button> 
          </form>
      </div>
    </div>
  </div>
  
</div>
</div>   
          
