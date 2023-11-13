<?php 
include("conexion.php");





if (isset($_POST['oferta'])) {
        $ID = mt_rand(1,999);
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
        $fecha_inicio = trim($_POST['inicioOferta']);
        $fecha_fin = trim($_POST['finOferta']);
       

        $image1 = '';
        $nombreimg = $_FILES["imagen1"]["name"];
        $archivo = $_FILES["imagen1"]["tmp_name"];
        $ruta ="img_alojamientos";
        $ruta = $ruta."/".$nombreimg;
        move_uploaded_file($archivo,$ruta);
        $image1 = $ruta;

        $image2 = '';
        $nombreimg = $_FILES["imagen2"]["name"];
        $archivo = $_FILES["imagen2"]["tmp_name"];
        $ruta ="img_alojamientos";
        $ruta = $ruta."/".$nombreimg;
        move_uploaded_file($archivo,$ruta);
        $image2 = $ruta;

        $image3 = '';
        $nombreimg = $_FILES["imagen3"]["name"];
        $archivo = $_FILES["imagen3"]["tmp_name"];
        $ruta ="img_alojamientos";
        $ruta = $ruta."/".$nombreimg;
        move_uploaded_file($archivo,$ruta);
        $image3 = $ruta;

        $image4 = '';
        $nombreimg = $_FILES["imagen4"]["name"];
        $archivo = $_FILES["imagen4"]["tmp_name"];
        $ruta ="img_alojamientos";
        $ruta = $ruta."/".$nombreimg;
        move_uploaded_file($archivo,$ruta);
        $image4 = $ruta;
        
        $image5 = '';
        $nombreimg = $_FILES["imagen5"]["name"];
        $archivo = $_FILES["imagen5"]["tmp_name"];
        $ruta ="img_alojamientos";
        $ruta = $ruta."/".$nombreimg;
        move_uploaded_file($archivo,$ruta);  
        $image5 = $ruta;

	    $consulta = "INSERT INTO registroalojamiento(ID, idusuario, Provincia,ciudad,direccion,tipoPropiedad,costo,tiempoMin,tiempoMax,cupo,titulo,descripcion,fecha_inicio,fecha_fin,imagen, imagen2, imagen3, imagen4, imagen5) VALUES ( '$ID', '$idu','$provincia','$ciudad','$direccion','$tipo_propiedad','$costo','$tiempoMin','$tiempoMax','$cupo','$titulo','$descripcion','$fecha_inicio','$fecha_fin','$image1', '$image2', '$image3', '$image4', '$image5')";
	    $resultado = mysqli_query($conexRapiBnB,$consulta);
      

	    if ($resultado) {
            
	    	?> 
	    	<h3 class="ok">¡Alojamiento registrado correctamente!</h3>
            
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
}

?>
