<?php
include 'basedatos/conexion.php';
?>

<html>
<head>
  <meta charset="utf-8">
 
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="externo/estilos.css" type="text/css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
  <title>
    Rapibnb
  </title>
</head>

<body>
<header>
  <nav>
    <div class="grid-container">
      <div class="grid-item" style="text-align: left; padding: 20px;">
        <a href="index.php"> <img alt="logo" src="img/logo1.png" style="width: 7em; "></a>
      </div>
      <div class="grid-item" style="text-align: center; padding: 20px;">
        <?php
        
        ?>
        <form class="d-flex" role="search" method="GET" action="buscador.php">
        
        <select id="busqueda" name="busqueda" class="form-select"  style="width: 30%; ">
                <option selected>Provincia</option>
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
                <option value="Tierra del Fuego">Tierra del Fuego</option><br>
        </select> 

          <input class="form-control me-2" type="search" placeholder="" aria-label="Search" name="dato" id="dato">
          <input class="form-control me-2" type="search" placeholder="Etiquetas" aria-label="Search" name="etiqueta">
        
          <input class="btn-bottom"  type="submit" name="enviar" value="Buscar">
        </form>
      </div>
      <div class="grid-item" style="text-align: right; padding: 20px; z-index: 1000;">
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
            
          </ul>
        </nav>
      </div>
    </div>
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
            z-index: 1004 !important;
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
  
  </nav>
</header>
<main>
<?php
if (isset($_GET['enviar'])) {
    $busquedad = $_GET['dato'];
    $busqueda = $_REQUEST['busqueda'];
    $etiqueta = $_REQUEST['etiqueta'];
    if($busqueda !== 'Provincia'){
    $consul1 = "SELECT * FROM registroalojamiento WHERE Provincia like '%$busqueda%' ";
    $consulta = mysqli_query($conexRapiBnB, $consul1);
   
    while ( $record = mysqli_fetch_array($consulta)) { 
        if($record>=1){?>

        <section class="contendor-body">

            <div class="row row-cols1 row-cols-sm-2 row-cols-md-3 g-3" id="card">

                <?php
                include("mostrar/mostrar-tarjeta.php");

                ?>
            </div>
    <?php
        }
      }
    }else if($busquedad !== ""){
    $consul2 = "SELECT * FROM registroalojamiento WHERE titulo like '%$busquedad%' or descripcion like '%$busquedad%' ";
    $consulta = mysqli_query($conexRapiBnB, $consul2);
   
    while ( $record = mysqli_fetch_array($consulta)) { 
        if($record>=1){?>

        <section class="contendor-body">

            <div class="row row-cols1 row-cols-sm-2 row-cols-md-3 g-3" id="card">

                <?php
                include("mostrar/mostrar-tarjeta.php");

                ?>
            </div>
    <?php
        }
      }
    }else {
      $consul3 = "SELECT * FROM registroalojamiento WHERE serviciosBasicos like '%$etiqueta%' ";
    $consulta = mysqli_query($conexRapiBnB, $consul3);
   
    while ( $record = mysqli_fetch_array($consulta)) { 
        if($record>=1){?>

        <section class="contendor-body">

            <div class="row row-cols1 row-cols-sm-2 row-cols-md-3 g-3" id="card">

                <?php
                include("mostrar/mostrar-tarjeta.php");

                ?>
            </div>
    <?php
        }
    }

    }

    
  }

    ?>
</main>

</html>