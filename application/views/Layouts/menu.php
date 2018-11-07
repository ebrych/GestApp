<nav class="navbar navbar-expand-lg navbar-light bg-light" >
  <img src="https://getbootstrap.com/docs/4.1/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
  <a class="navbar-brand" href="#"> &nbsp;Gestión de Servicios</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto"></ul>
    <ul class="navbar-nav  navbar-right">
      <li class="nav-item" id="idPanel">
            <a class="nav-link" href="<?php echo base_url() ?>Welcome/Panel"><i class="fas fa-columns"></i> Panel Principal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Panel/cuenta"> <i class="fas fa-cog"></i> Opciones</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" (click)="logout()"> <i class="fas fa-sign-out-alt"></i> Salir </a>
      </li>
    </ul>
  </div>
</nav>
