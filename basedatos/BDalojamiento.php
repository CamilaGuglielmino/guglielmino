<?php 
include("conexion.php");

if (isset($_POST['oferta'])) {
    if(isset($_POST['servicios'])){
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
        $image = '';

        $nombreimg = $_FILES["imagen"]["name"];
        $archivo = $_FILES["imagen"]["tmp_name"];
        $ruta ="img_alojamientos";
        $ruta = $ruta."/".$nombreimg;
        move_uploaded_file($archivo,$ruta);
        $image = $ruta;
        
	    $consulta = "INSERT INTO registroalojamiento(ID,Provincia,ciudad,direccion,tipoPropiedad,serviciosBasicos,costo,tiempoMin,tiempoMax,cupo,titulo,descripcion,fecha_inicio,fecha_fin,image) VALUES ( '$ID','$provincia','$ciudad','$direccion','$tipo_propiedad','$servicios','$costo','$tiempoMin','$tiempoMax','$cupo','$titulo','$descripcion','$fecha_inicio','$fecha_fin','$image')";
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
}
?>
