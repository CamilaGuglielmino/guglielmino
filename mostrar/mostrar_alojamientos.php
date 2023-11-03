<?php 
$inc = include("basedatos\conexion.php");

if ($inc) {
	$consulta = "SELECT * FROM registroalojamiento";
	$resultado = mysqli_query($conexRapiBnB,$consulta);

	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
            $ID = $row['ID'];
            $provincia = $row['Provincia'];
            $ciudad = $row['ciudad'];
            $direccion = $row['direccion'];
            $tipo_propiedad = $row['tipoPropiedad'];
            $costo = $row['costo'];
            $tiempoMin = $row['tiempoMin'];
            $tiempoMax = $row['tiempoMax'];
            $cupo = $row['cupo'];
            $titulo = $row['titulo'];
            $descripcion = $row['descripcion'];
            $imagen = $row['image'];
            $servicios = $row['serviciosBasicos'];
            $fecha_inicio = $row['fecha_inicio'];
            $fecha_fin = $row['fecha_fin'];
	
            echo("$ID ");
            echo("$provincia ");
            echo("$ciudad ");
            echo("$direccion "); 
            echo("$tipo_propiedad "); 
            echo("$costo ");  
            echo("$tiempoMin ");  
            echo("$tiempoMax ");  
            echo("$cupo ");  
            echo("$titulo ");  
            echo("$descripcion ");  
            echo(" $servicios ");  
            echo(" $fecha_inicio ");  
            echo(" $fecha_fin ");   
          
        ?>
        <div class="cardheader">
            <div class="avatar">
                <img alt="" src="<?php echo ("$imagen"); ?>" width=80px height=auto">
            </div>
        </div><?php
        }
    }
}

?>