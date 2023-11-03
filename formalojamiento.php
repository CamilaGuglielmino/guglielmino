<html>
    <head>
        <title>RegistroAlojamiento:</title>
	    <meta charset="utf-8">
	    <link rel="stylesheet" type="text/css" href="styles.css">
    </head> 
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