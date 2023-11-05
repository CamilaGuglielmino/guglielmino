<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="externo/estilos.css" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <title>
    RapiBnB
  </title>
</head>

<header>
  <nav>
    <div class="grid-container">
      <div class="grid-item" style="text-align: left;">
        <img alt="logo" src="img\logo2.png">
      </div>

      <div class="grid-item" style="text-align: center; padding: 20px;">
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <p></p>
          <a class="nav-link active" aria-current="page" href="registrarse.html">
            <button type="button" class="btn btn-outline-danger">
              Buscar
            </button></a>
        </form>
      </div>

      <div class="grid-item" style="text-align: right; padding: 20px;">
        <div class="hamburger">
          <div class="_layer -top"></div>
          <div class="_layer -mid"></div>
          <div class="_layer -bottom"></div>
        </div>
        <nav class="menuppal">
          <ul>
            <li><a href="iniciarsesion.php">Iniciar Sesión</a></li>
            <li><a href="registrarse.php">Registrarse</a></li>
            <li><a href="formalojamiento.php">Registrar tu alojamiento</a></li>
            <li><a href="editarPerfil.php">Editar Perfil</a></li>
          </ul>
        </nav>
        <style>
          .hamburger {
            position: fixed;
            background-color: transparent;
            top: 10;
            height: 30px;
            width: 30px;
            padding: 20px 20px;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: -webkit-transform 0.25s cubic-bezier(0.05, 1.04, 0.72, 0.98);
            transition: transform 0.25s cubic-bezier(0.05, 1.04, 0.72, 0.98);
            z-index: 1002;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
          }

          .hamburger.is-active {
            background-color: none;
          }

          ._layer {
            background: #333333;
            margin-bottom: 4px;
            border-radius: 2px;
            width: 28px;
            height: 4px;
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
            -webkit-transition: all 0.25s cubic-bezier(0.05, 1.04, 0.72, 0.98);
            transition: all 0.25s cubic-bezier(0.05, 1.04, 0.72, 0.98);
          }

          .hamburger:hover .-top {
            -webkit-transform: translateY(-100%);
            -ms-transform: translateY(-100%);
            transform: translateY(-100%);
          }

          .hamburger:hover .-bottom {
            -webkit-transform: translateY(50%);
            -ms-transform: translateY(100%);
            transform: translateY(100%);
          }

          .hamburger.is-active .-top {
            -webkit-transform: translateY(200%) rotate(45deg) !important;
            -ms-transform: translateY(200%) rotate(45deg) !important;
            transform: translateY(200%) rotate(45deg) !important;
          }

          .hamburger.is-active .-mid {
            opacity: 0;
          }

          .hamburger.is-active .-bottom {
            -webkit-transform: translateY(-200%) rotate(135deg) !important;
            -ms-transform: translateY(-200%) rotate(135deg) !important;
            transform: translateY(-200%) rotate(135deg) !important;
          }

          .menuppal.is_active {
            transform: translate3d(0px, 0px, 0px);
          }

          .menuppal {
            background-color: rgba(255, 255, 255, 0.95);
            bottom: 0;
            height: 100%;
            left: 0;
            overflow-y: scroll;
            position: fixed;
            top: 0;
            transform: translate3d(0px, -100%, 0px);
            transition: transform 0.35s cubic-bezier(0.05, 1.04, 0.72, 0.98) 0s;
            width: 100%;
            z-index: 1001;
          }

          .menuppal ul {
            margin: 0;
            padding: 0;
          }

          .menuppal ul li {
            list-style: none;
            text-align: center;
            font-family: Verdadna, Arial, Helvetica;
            color: nav-color-text;
            font-size: 1.5rem;
            line-height: 3em;
            height: 3em;
            color: #369;
            text-transform: none;
            font-weight: bold;
          }

          .menuppal ul li a {
            text-decoration: none;
            color: #369;
          }

          .menuppal ul li a:hover {
            text-decoration: none;
            color: #333;
          }
        </style>
        <script>
          // selector
          var menu = document.querySelector('.hamburger');

          // method
          function toggleMenu(event) {
            this.classList.toggle('is-active');
            document.querySelector(".menuppal").classList.toggle("is_active");
            event.preventDefault();
          }

          // event
          menu.addEventListener('click', toggleMenu, false);
        </script>

      </div>
  </nav>
</header>

<body>
  <br>
  <h2> Encontra tu pr&oacutexima estadia</h2>
  <?php
  include("mostrar/mostrar-tarjeta.php");
  ?>
  



  <!--<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>
  </div>

  <h3> Registros </h3>
 
-->

</body>

<footer>
  <p> - SEGUINOS EN NUESTRAS REDES SOCIALES - </p>
  <div class="contenedor-icono">
    <div class="container">
      <div class="col">
        <div class="row justify-content-md-center">
          <div class="col col-lg-2">
            <a href="https://www.instagram.com/" TARGET="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16" color= #000>
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
              </svg>
            </a>
          </div>
          <div class="col-md-auto">
            <a href="https://www.facebook.com" TARGET="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
              </svg>
            </a>
          </div>
          <div class="col col-lg-2">
          <a href="https://t.me/ TARGET=" _blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telegram" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.287 5.906c-.778.324-2.334.994-4.666 2.01-.378.15-.577.298-.595.442-.03.243.275.339.69.47l.175.055c.408.133.958.288 1.243.294.26.006.549-.1.868-.32 2.179-1.471 3.304-2.214 3.374-2.23.05-.012.12-.026.166.016.047.041.042.12.037.141-.03.129-1.227 1.241-1.846 1.817-.193.18-.33.307-.358.336a8.154 8.154 0 0 1-.188.186c-.38.366-.664.64.015 1.088.327.216.589.393.85.571.284.194.568.387.936.629.093.06.183.125.27.187.331.236.63.448.997.414.214-.02.435-.22.547-.82.265-1.417.786-4.486.906-5.751a1.426 1.426 0 0 0-.013-.315.337.337 0 0 0-.114-.217.526.526 0 0 0-.31-.093c-.3.005-.763.166-2.984 1.09z" />
              </svg>
          </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  ©Guglielmino Camila - Vilchez Rocio - 2023

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</footer>

</html>