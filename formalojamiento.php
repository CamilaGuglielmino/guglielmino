<?php
require_once 'basedatos\validar_sesion.php';
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
      <div class="grid-item" style="text-align: right !important; ">
        <div class="hamburger">
          <div class="_layer -top"></div>
          <div class="_layer -mid"></div>
          <div class="_layer -bottom"></div>
        </div>
        <nav class="menuppal">
          <ul>
            <li><a href="#">Bienvenido <?php echo $_SESSION['user'] ?></a></li>
            <li><a href="cuenta.php">Mi cuenta</a></li>
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

<body>
  <?php
  $email = $_SESSION['user'];
  require_once("basedatos/conexion.php");

  $sql = "SELECT * FROM registrousuario where correo='$email' ";
  $resultado = mysqli_query($conexRapiBnB, $sql);
  while ($row = mysqli_fetch_array($resultado)) {
    $ID= $row["id"];
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
  <div class="signupFrm">
    <form method="POST" enctype="multipart/form-data">
      <h4 style="text-align:left;"> Informaci&oacuten del alojamiento:</h4><br>
      <div class="row">
        <div class="col">
          <h4 style="text-align:left;"> Datos del Propietario:</h4><br>
          Usuario: <?php echo $usuario ?><br>
          Email: <?php echo $email ?><br>
          
          Nombre y Apellido: <?php echo $Nombre ?> <?php echo $Apellido ?><br>
         <p style="align-items: center;"> ____________________________________________________________________________________________________________</p>

        </div>
      <div>
      <div class="row">
      <div class="col-3">
          <input type="text" class="input" id="ciudad" placeholder="ciudad" name="ciudad">
          <label for="ciudad" class="label">Ciudad</label>

        </div>
        <div class="col-3">
        
        
        <select id="provincia" name="provincia">
          <option value="seleccione">Seleccione...</option>
          <option value="San Luis">San Luis</option>
          <option value="Buenos Aires">Buenos Aires</option>
          <option value="Catamarca">Catamarca</option>
          <option value="Chaco">Chaco</option>
          <option value="Cordoba">C&oacuterdoba</option>
          <option value="Corrientes">Corrientes</option>
          <option value="Entre Rios">Entre R&iacuteos</option>
          <option value="Formosa">Formosa</option>
          <option value="Jujuy">Jujuy</option>
          <option value="La Pampa">La Pampa</option>
          <option value="La Rioja">La Rioja</option>
          <option value="Mendoza">Mendoza</option>
          <option value="Misiones">Misiones</option>
          <option value="Neuquen">Neuqu&eacuten</option>
          <option value="Rio Negro">R&iacuteo Negro</option>
          <option value="Salta">Salta</option>
          <option value="San Juan">San Juan</option>
          <option value="Santa Cruz">Santa Cruz</option>
          <option value="Santa Fe">Santa Fe</option>
          <option value="Santiago del Estero">Santiago del Estero</option>
          <option value="Tucuman">Tucum&aacuten</option>
          <option value="Tierra del Fuego">Tierra del Fuego</option>
        </select>
        <label for="provincia" class="label">Provincia</label>
        
        </div>
       
        
      </div>

        <div class="row">
         <p style="align-items: center;"> ____________________________________________________________________________________________________________</p>
        </div>
        <div class="row-cols-auto">
        <div class="col-4">
        <div class="inputContainer">
          <input type="text" class="input" placeholder="" name="direccion">
          <label for="" class="label">Direccion</label>
        </div>
        </div>
        <div class="col-6">
          <select id="tipoPropiedad" name="tipoPropiedad">
            <option value="seleccione">Seleccione...</option>
            <option value="casa">Casa</option>
            <option value="departamento">Departamento</option>
            <option value="cabaña">Caba&ntildea</option>
            <option value="habitacion">Habitaci&oacuten</option>
          </select>
        </div>
        </div>
        <div class="row">
         <p style="align-items: center;"> ____________________________________________________________________________________________________________</p>
        </div>

        <div class="row-cols-auto">
        <label>Servicios</label>
          <p style="text-align:justify;">
            <input type="checkbox" name="servicios[]" value="wifi"> Wifi
            <input type="checkbox" name="servicios[]" value="cocina"> Cocina
            <input type="checkbox" name="servicios[]" value="lavarropas"> Lavarropas<br>
            <input type="checkbox" name="servicios[]" value="aireacondicionado"> Aire acondicionado
            <input type="checkbox" name="servicios[]" value="televisor"> Televisor
            <input type="checkbox" name="servicios[]" value="calefaccion"> Calefacci&oacuten<br><br>
          </p>
        </div>
                     
        <div class="row">
         <p style="align-items: center;"> ____________________________________________________________________________________________________________</p>
        </div>
 
        <div class="inputContainer">
        <input type="number" name="costo" required > <br>
        </div>

        <div class="inputContainer">
        <input type="number" name="tiempoMin" required> <br>
        </div>

        <div class="inputContainer">
        <input type="number" name="tiempoMax" required> <br>
        </div>

        <div class="inputContainer">
        
        <input type="number" name="cupo" required> <br>
        </div>

        <h4 style="text-align:left;"> Detalles de la oferta:</h4><br>

        <div class="inputContainer">
        <input type="text" name="titulo"> 
        <label> Titulo </label>
        </div>
        <div class="inputContainer">
        <textarea name="descripcion" rows="5" cols="30"> </textarea>
        <label> Descripcion </label>
        </div>
        <div class="row">
        <input type="file" name="imagen1" required>
        <input type="file" name="imagen2" required>
        <input type="file" name="imagen3" required>
        <input type="file" name="imagen4" >
        <input type="file" name="imagen5" >
        <small>Obligatorio 3 imagenes</small>
        </div>
  

        <input type="submit" class="submitBtn" name="oferta" value="Crear registro">

    </form>

    <?php
    include("basedatos\BDalojamiento.php");
    ?>
  </div>
</body>

</html>