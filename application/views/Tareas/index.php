<br/>
<div class="container">
  <h1>Tareas del día</h1> 
    <a href="<?php echo base_url() ?>Tareas/nuevo" style="font-size:20px;color:#007bff;"><i class="fas fa-plus-circle"></i> Agregar Tarea</a>
    <p>&nbsp;</p>
    <div class="row">
        <div class="col-sm">
            <form action="<?php echo base_url() ?>Tareas/index" method="get" >
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
            foreach ($tareas as $row){
        ?>
        <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
            <div class="row">
                <div class="col-8">
                    <h5 class="nombre" style="font-weight: bold;font-size:25px"> <?php echo $row->cliente ?></h5>
                    <i class="fas fa-warehouse"></i> <?php echo $row->email ?>  &nbsp;&nbsp;|&nbsp;&nbsp;
                    <i class="fas fa-calendar-alt"></i> <?php echo $row->telefono ?> <br/>
                    <i class="fab fa-font-awesome-flag"></i> <?php echo $row->telefono ?>
                    
                </div>
                <div class="col-4" align="right">
                <i class="fas fa-pen" onclick="hrefToAct(<?php echo $row->id ?>)" style="font-size: 20px;color:#007bff;"></i>
                </div>
            </div>
        </a>
        <?php 
            } 
        ?>  
    </div>


</div>

<!--
<div class="list-group">
        <div href="#" class="list-group-item list-group-item-action flex-column align-items-start" *ngFor="let data of groupList">
          <div class="d-flex w-100 justify-content-between">
            <h5 class="mb-1">{{data.cliente}}</h5>
            <div align="right">
            <small>
              <i class="fas fa-users" (click)="abrirModalTrabajadores(data.id)" style="font-size: 20px;color:#007bff;cursor: pointer;"></i>
              &nbsp;
              <i class="fas fa-hands-helping" (click)="abrirModalServicio(data.id)" style="font-size: 20px;color:#007bff;cursor: pointer;"></i>
              &nbsp;
              <i class="far fa-money-bill-alt" (click)="abrirModalPago(data.id)"  style="font-size: 20px;color:#007bff;cursor: pointer;"></i>
              &nbsp;
              <i class="fas fa-receipt" (click)="abrirModalRecibos(data.id)" style="font-size: 20px;color:#007bff;cursor: pointer;"></i>
              <br/>
              <i class="fas fa-ban" (click)="abrirModalCancela(data.id)" style="font-size: 20px;color:#007bff;cursor: pointer;"></i>
            </small>
            </div>
          </div>
          <p class="mb-1"><i class="fas fa-warehouse"></i> {{data.local}}</p>
          <p class="mb-1"><i class="fas fa-calendar-alt"></i> {{data.fecha}}</p>
          <p class="mb-1"><i class="fab fa-font-awesome-flag"></i> {{data.estado}}</p>
        </div>
      </div>