<html>
<?php
require_once '../basedatos/validar_sesion.php';
$email = $_SESSION['user'];
if (isset($_GET['Message'])) {
  print '<script type="text/javascript">alert("' . $_GET['Message'] . '");</script>';
  
           }

?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../externo/estilos.css" type="text/css">
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

        <a href="indexadm.php"> <img alt="logo" src="../img/logo1.png" style="width: 7em; "></a>
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
            <li><a href="#">Bienvenido <?php echo $_SESSION['user'] ?></a></li>
            <li><a href="../cuenta.php">Mi cuenta</a></li>
            <li><a href="../editarPerfil.php">Editar Perfil</a></li>
            <li><a href="../formalojamiento.php">Registrar tu alojamiento</a></li>
            <li><a href="../logout.php">Cerrar Sesión</a></li>
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
    <div class="navbar">
        <div class="navbar-inner">
            <div class="container">
                <div class="nav-collapse">
                    <ul class="nav">
                        <li class=""><a href="admin.php">ADMINISTRADOR DEL SITIO</a></li>
                    </ul>
                    <form action="#" class="navbar-search form-inline" style="margin-top:6px">

                    </form>
                    <ul class="nav pull-right">
                        <li><a href="">Bienvenido <strong><?php echo $_SESSION['user']; ?></strong> </a></li>
                        
                    </ul>
                </div><!-- /.nav-collapse -->
            </div>
        </div><!-- /navbar-inner -->
    </div>
    <div class="row">



        <div class="span12">

            <div class="caption">

                <!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
                <h2> Administración de usuarios registrados</h2>
                <div class="well well-small">
                    <hr class="soft" />
                    <h4>Tabla de Usuarios</h4>
                    <div class="row-fluid">




                        <?php

                        require('../basedatos/conexion.php');
                        $sql = ("SELECT * FROM registrousuario");

                        //la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
                        $query = mysqli_query($conexRapiBnB, $sql);

                        echo "<table border='1'; class='table table-hover';>";
                        echo "<tr class='warning'>";
                        echo "<td>ID</td>";
                        echo "<td>correo</td>";
                        echo "<td>usuario</td>";
                        echo "<td>contraseña</td>";
                        echo "<td>Editar</td>";
                        echo "<td>Borrar</td>";
                        echo "</tr>";


                        ?>

                        <?php
                        while ($arreglo = mysqli_fetch_array($query)) {
                            echo "<tr class='success'>";
                            echo "<td>$arreglo[0]</td>";
                            echo "<td>$arreglo[1]</td>";
                            echo "<td>$arreglo[2]</td>";
                            echo "<td>$arreglo[3]</td>";
                            echo "<td>$arreglo[4]</td>";
/*
                            echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></td>";
                            echo "<td><a href='indexadm.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";
*/


                            echo "</tr>";
                        }

                        echo "</table>";
/*
                        extract($_GET);
                        if (@$idborrar == 2) {

                            $sqlborrar = "DELETE FROM login WHERE id=$id";
                            $resborrar = mysqli_query($mysqli, $sqlborrar);
                            echo '<script>alert("REGISTRO ELIMINADO")</script> ';
                            //header('Location: proyectos.php');
                            echo "<script>location.href='admin.php'</script>";
                        }*/

                        ?>






                        <div class="span8">

                        </div>
                    </div>
                    <br />



                    <!--EMPIEZA DESLIZABLE-->

                    <!--TERMINA DESLIZABLE-->





                </div>


                <!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
            </div>

        </div>
    </div>
    <!-- Footer
      ================================================== -->
    <hr class="soften" />

</body>

</html>