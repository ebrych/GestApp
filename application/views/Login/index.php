
<div class="container">
    <form action="<?php echo base_url() ?>/Welcome/session" method="POST" class="form-signin" style="margin-top:-50px">
        <div align="center">
          <img class="mb-4" src="https://getbootstrap.com/docs/4.1/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        </div>
        <label style="color:#bdc3c7">Iniciar Sesión</label>
        <input type="text" id="inputEmail" class="form-control" name="username"  placeholder="Usuario" required autofocus>
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Contraseña" required>
        <button class="btn btn-primary btn-block" type="submit">Iniciar Sesión</button>
        <hr/>
          <div align="right" style="margin-top: -10px"><label onclick="modalOlvideCon()" style="color:#bdc3c7;font-size: 17px;cursor: pointer">Olvide mi contraseña</label></div>
      </form> 
</div>






<!-- Modal -->
<div class="modal fade" id="modalOlvPs" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Recuperar Contraseña</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <form action="<?php echo base_url() ?>Welcome/recuperaPass" method="post">
              <label>Ingrese su correo electrónico</label>
              <input type="email" class="form-control" name="mail" placeholder="Email" required>
              <button type="submit" class="btn btn-primary" class="100%">Submit</button>
          </form>
      </div>
    </div>
  </div>
</div>
