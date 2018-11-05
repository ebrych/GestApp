<br/>
<div class="container">
    <h1>Comprobante</h1> 
    <a href="<?php echo base_url() ?>Tareas/index?dateData=<?php echo $fecha ?>" style="font-size:20px;color:#007bff;"><i class="fas fa-arrow-left"></i> Regresar </a>
    <br/><br/>
    <form action="<?php echo base_url() ?>Tareas/agregarComprobante" method="post">
        <input type="text" class="form-control" name="idtarea"  style="display: none"  value="<?php echo $tarea ?>" />
        <input type="text" class="form-control" name="fechatarea"  style="display: none"  value="<?php echo $fecha ?>" />
        <label>Serie</label>
        <input type="text" class="form-control" name="serie" require  />
        <label>Número</label>
        <input type="text" class="form-control" name="numero" require />
        <br/>
        <button class="btn btn-primary btn-block" type="submit" >Agregar Comprobante</button>
    </form>
</div>