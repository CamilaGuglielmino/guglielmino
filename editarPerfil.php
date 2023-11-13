<?php
include("basedatos/conexion.php");
include("usuarionuevo.php");
include("basedatos/BDusuarios.php");
include("basedatos/validar_sesion.php");
//session_start ();
if (isset($_GET['Message1'])) {
  print '<script type="text/javascript">alert("' . $_GET['Message1'] . '");</script>';
}

?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="externo/estilos.css" type="text/css">
  <link rel="stylesheet" href="externo/form.css" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <title>
    Rapibnb
  </title>
</head>

<header>
  <nav>
    <div class="grid-container">
      <div class="grid-item" style="text-align: left;">

        <a href="indexx.php"> <img alt="logo" src="img/logo1.png" style="width: 7em; "></a>
      </div>
      <div class="grid-item" style="text-align: center; padding: 20px;">
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <p></p>
          <a class="nav-link active" aria-current="page" href="#">
            <button type="button" class="btn btn-outline-danger" style="background-color: #1D2C49; ">
              Buscar
            </button></a>
        </form>
      </div>
      <div class="grid-item" style="text-align: right; padding: 20px; align-content: center;">
        <div class="hamburger">
          <div class="_layer -top"></div>
          <div class="_layer -mid"></div>
          <div class="_layer -bottom"></div>
        </div>
        <nav class="menuppal">
          <ul>
            <li><a href="editarPerfil.php">Editar Perfil</a></li>
            <li><a href="formalojamiento.php">Registrar tu alojamiento</a></li>
            <li><a href="logout.php">Cerrar Sesión</a></li>
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
            background: #1D2C49;
            margin-bottom: 4px;
            border-radius: 2px;
            width: 28px;
            height: 4px;
            opacity: 10;
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
            color: #1D2C49;
            font-size: 1.5rem;
            line-height: 3em;
            height: 3em;
            color: #1D2C49;
            text-transform: none;
            font-weight: bold;
          }

          .menuppal ul li a {
            text-decoration: none;
            color: #1D2C49;
          }

          .menuppal ul li a:hover {
            text-decoration: none;
            color: #1D2C49;
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
<?php
require_once("basedatos/conexion.php");


$email = $_SESSION['user'];


$sql = "SELECT * FROM registrousuario where correo='$email' ";
$resultado = mysqli_query($conexRapiBnB, $sql);
while ($row = mysqli_fetch_array($resultado)) {

  $usuario = $row['usuario'];
  $contraseña = $row['contra'];
  $contraseña2 = $row['contra2'];
  $Nombre = $row['nombre'];
  $Apellido = $row['apellido'];
  $edad = $row['edad'];
  $numero = $row['telefono'];
  $intereses = $row['intereses'];
  $image = $row['imagen'];
}


?>

<body>
  <h1 class="title" style="align-items: center;">Bienvenido <?php echo $usuario; ?></h1>
  <div class="containe" style="width: 100%;">
    <div class="row">
      <form action="perfil.php" method="POST" enctype="multipart/form-data">
        <div class="col">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo $image ?>" class="card-img-top" alt="foto de perfil" requierd>
            <div class="card-body">

              <input class="form-control" type="file" id="formFile" name="imagen">
              <input type="submit" name="perfil" value="Cambiar Foto de Perfil">
            </div>
          </div>
        </div>
      </form>
    </div>
    <div class="col">
    <form action="formulario.php" method="POST" enctype="multipart/form-data">
          <label>Usuario: <?php echo ("$usuario") ?> </label>
          <div class="mb-3">
            <label for="formFile" class="form-label">contraseña</label>
            <input type="password" name="contraseña" class="form-control" value="<?php echo ("$contraseña") ?>">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">contraseña</label>
            <input type="password" name="contraseña2" class="form-control" value="<?php echo ("$contraseña2") ?>">
          </div>
          <input type="submit" name="cambiarContraseña" value="Cambiar Contraseña">
          <input type="submit" name="verificacion" value="Solicitar verificacion">
    </form>
    </div>
  </div>
<p style="align-content: center;">_______________________________________________________________________________________________________________________________________________________</p>
<div class="row">
<form action="editar.php" method="POST" enctype="multipart/form-data">
        <h4 style="text-align:center;">Informaci&oacuten personal:</h4><br>
        <div class="row g-2">
          <div class="mb-3">
            <label for="formFile" class="form-label">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="<?php echo ("$Nombre") ?>">
          </div>
          <div class="mb-3">
            <label for="formFile" class="form-label">Apellido</label>
            <input type="text" name="apellido" class="form-control" value="<?php echo ("$Apellido") ?>">
          </div>
        </div>
        <div class="row g-2">
          <div class="col-md">
            <div class="form-floating">
              <input type="number" name="edad" class="form-control" id="floatingInputGrid" placeholder="" value="<?php echo ("$edad") ?>">
              <label for="floatingInputGrid">Edad</label>
            </div>
          </div>
          <div class="col-md">
            <div class="form-floating">
              <input type="number" name="numero" class="form-control" id="floatingInputGrid" placeholder="" value="<?php echo ("$numero") ?>">
              <label for="floatingInputGrid">telefono</label>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="mb-3">
          <label for="formFile" class="form-label">Interéses</label>
          <input type="text" name="intereses" class="form-control" value="<?php echo ("$intereses") ?>">
        </div>
        </div>
 
        <input class="submit" type="submit" name="editar" value="Guardar Cambios">
      
    </form>
    <br>

</div>

</body>


<footer>
  <p> - SEGUINOS EN NUESTRAS REDES SOCIALES - </p>
  <div class="contenedor-icono">
    <div class="container">
      <div class="col">
        <div class="row justify-content-md-center">
          <div class="col col-lg-2">
            <a href="https://www.instagram.com/" TARGET="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="bi bi-instagram" viewBox="0 0 20 20" color=#000>
                <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z" />
              </svg>
            </a>
          </div>
          <div class="col-md-auto">
            <a href="https://www.facebook.com" TARGET="_blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="bi bi-facebook" viewBox="0 0 20 20" color=#000>
                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
              </svg>
            </a>
          </div>
          <div class="col col-lg-2">
            <a href="https://twitter.com/ TARGET=" _blank">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" class="bi bi-twitter" viewBox="0 0 20 20" color=#000>
                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

  © Camila Guglielmino - 2023

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</footer>

</html>