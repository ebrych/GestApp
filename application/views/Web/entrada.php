<br/>

<div class="container">
  <h1>Agregar Entrada de información</h1> 
  <a href="<?php echo base_url() ?>Web/" style="font-size:20px;color:#007bff;"><i class="fas fa-arrow-left"></i> Regresar </a>
<br/><br/>
  <form action="<?php echo base_url() ?>Web/agregarInformacion" method="post">
    <label>Titulo</label>
    <input type="text" class="form-control" name="titulo"   required >
    <label>Descripción</label>
    <textarea class="form-control" name="descripcion" required></textarea>
    <label>Número de Orden</label>
    <input type="number" class="form-control" name="orden"   required >
    <br/>
    <button class="btn btn-primary btn-block" type="submit">Guardar</button> 
  </form>
</div>
