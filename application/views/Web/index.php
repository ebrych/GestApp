<p>&nbsp;</p>
<div class="container">
    <h1>Gestión de Página Web</h1> 

    <p>&nbsp;</p>

    <div class="accordion" id="accordionExample">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
              <i class="fas fa-file-import" style="font-size:22px"></i> &nbsp;&nbsp;INFORMACIÓN
            </button>
          </h5>
        </div>
        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
          <div class="card-body">
            <div style="font-size:20px;color:#007bff;cursor: pointer;" align="right" (click)="abrirModalNuevaEntrada()"><i class="fas fa-plus-circle"></i> Agregar entrada </div>
            <p>&nbsp;</p>
            <?php
              foreach()
            ?>
            <div class="container" *ngFor="let data of EntradasList">
              <div class="row" >
                <div class="col-sm-2">
                  Titulo:<br/> {{data.titulo}}
                </div>
                <div class="col-sm-6">
                  Descripción:<br/>  {{data.descripcion}}
                </div>
                <div class="col-sm-2">
                  Orden:  {{data.orden}}
                </div>
                <div class="col-sm-2" align="right">
                  <div style="color:#007bff;cursor: pointer;">
                      <i class="fas fa-pencil-alt"  (click)="editEntrada(data.id)" style="font-size:20px;"></i>
                      &nbsp;
                      <i class="fas fa-trash-alt" (click)="deleteEntrada(data.id)" style="font-size:20px;"></i>
                  </div>
                </div>
              </div>
              <hr/>
            </div>

          </div>
        </div>
</div>
