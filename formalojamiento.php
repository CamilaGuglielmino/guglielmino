<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="externo/estilos.css" type="text/css">
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

    <body>
     <?php
      $provError=$ciudadError=$direccionError=$serviciosError="";
      $tipo_propiedadError=$costoError=$tiempoMinError=$tiempoMaxError=$cupoError=$tituloError=$descripcionError="";
     
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $provincia = $_REQUEST['provincia'];
        $ciudad = trim($_POST['ciudad']);
        $direccion = trim($_POST['direccion']);
        $tipo_propiedad = $_REQUEST['tipoPropiedad'];
        $costo = trim($_POST['costo']);
        $tiempoMin = trim($_POST['tiempoMin']);
        $tiempoMax = trim($_POST['tiempoMax']);
        $cupo = trim($_POST['cupo']);
        $titulo = trim($_POST['titulo']);
        $descripcion = trim($_POST['descripcion']);        

        if($provincia=="seleccione"){
            $provError="<br>Seleccione una provincia.";
        }
        
        if($ciudad==""){
           $ciudadError="Ingrese una ciudad.";
        }

        if($direccion==""){
            $direccionError="Ingrese una direcci&oacuten.";
        }
        
        if($tipo_propiedad==="seleccione"){
            $tipo_propiedadError="Seleccione un tipo.";
        }
        
        if(isset($_POST['servicios'])){
            $servicios = implode(' ', $_POST['servicios']); 
           }
        else{
            $serviciosError="Seleccione al menos un servicio.";
        }

        if($costo=="" || $costo<1){
            $costoError="Ingrese precio";
          }
          
          if($tiempoMin=="" || $tiempoMin<1){
            $tiempoMinError="Ingrese tiempo m&iacutenimo.";
          }
          
          if($tiempoMax=="" || $tiempoMax<1){
            $tiempoMaxError="Ingrese tiempo m&aacuteximo.";
          }
          
          if($cupo=="" || $cupo<1){
            $cupoError="Ingrese cupo.";
          }
          
          if($titulo==""){
            $tituloError="Ingrese t&iacutetulo.";
          }

          if($descripcion==""){
            $descripcionError="Ingrese una descripci&oacuten";
          }
     }
     ?>
    
    <form method="POST" enctype="multipart/form-data">    
        <p style="text-align:left;"><span class="error"> (*) Campos obligatorios</span></p><br>
        <h4 style="text-align:left;"> Informaci&oacuten del alojamiento:</h4><br>
    
        <span class="error">*</span> Provincia:<br>
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
            <span class="error"> <?php echo $provError; ?></span><br><br>
        <span class="error">*</span> Ciudad: <br>   
            <input type="text" name="ciudad"> <br>
        <span class="error"> <?php echo $ciudadError; ?></span><br><br>
        
        <span class="error">*</span> Direcci&oacuten:<br>
            <input type="text" name="direccion"> <br>
        <span class="error"> <?php echo $direccionError ?></span><br><br>

        <span class="error">*</span> Tipo de propiedad:<br>
            <select id="tipoPropiedad" name="tipoPropiedad">
                <option value="seleccione">Seleccione...</option>
                <option value="casa">Casa</option>
                <option value="departamento">Departamento</option>
                <option value="cabaña">Caba&ntildea</option>
                <option value="habitacion">Habitaci&oacuten</option> 
        </select><br>
        <span class="error"> <?php echo $tipo_propiedadError; ?></span><br><br>

        <span class="error">*</span> Servicios b&aacutesicos:<br>
        <p style="text-align:justify;">
            <input  type="checkbox" name="servicios[]" value="wifi"> Wifi
            <input type="checkbox" name="servicios[]" value="cocina"> Cocina
            <input type="checkbox" name="servicios[]" value="lavarropas"> Lavarropas<br>
            <input type="checkbox" name="servicios[]" value="aireacondicionado"> Aire acondicionado
            <input type="checkbox" name="servicios[]" value="televisor"> Televisor
            <input type="checkbox" name="servicios[]" value="calefaccion"> Calefacci&oacuten<br><br>
        </p>
        <span class="error"> <?php echo $serviciosError; ?></span><br><br>

        <span class="error">*</span> Costo por d&iacutea:<br>
            <input type="number" name="costo"> <br>
        <span class="error"> <?php echo $costoError; ?></span><br><br>

        <span class="error">*</span> Tiempo m&iacutenimo de permanencia:<br>
            <input type="number" name="tiempoMin"> <br>
        <span class="error"> <?php echo $tiempoMinError; ?></span><br><br>

        <span class="error">*</span> Tiempo m&aacuteximo de permanencia:<br>
            <input type="number" name="tiempoMax"> <br>
        <span class="error"> <?php echo $tiempoMaxError; ?></span><br><br>

        <span class="error">*</span> Cupo:<br>
            <input type="number" name="cupo"> <br>
        <span class="error"> <?php echo $cupoError; ?></span><br><br>

        <h4 style="text-align:left;"> Detalles de la oferta:</h4><br>

        <span class="error">*</span> T&iacutetulo:<br>
            <input type="text" name="titulo"> <br>
        <span class="error"> <?php echo $tituloError; ?></span><br><br>

        <span class="error">*</span> Descripci&oacuten:<br>
                <textarea name="descripcion" rows="5" cols="30">
                </textarea><br>
        <span class="error"> <?php echo $descripcionError; ?></span><br><br>

        <span class="error">*</span> Fotos:<br>
            <input type="file" name="imagen" required><br>
        
        <p style="text-align:left;"> Duraci&oacuten activa:</p><br>
        
        Fecha inicio:<br>
        <input type="date" name="inicioOferta"> <br><br>

        Fecha fin:<br>
        <input type="date" name="finOferta"> <br>

        <h4 style="text-align:left;"> Datos del Propietario:</h4><br>
        Nombre:<br>

        Apellido:<br>
        
        N&uacutemero de contacto:<br><br>

            <input type="submit" name="oferta" value="CREAR OFERTA">
        </form>

       <?php
           include("basedatos\BDalojamiento.php");
       ?>
    </body>
</html>