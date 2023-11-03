<?php
$inc = include("basedatos\conexion.php");

if ($inc) {
	$consulta = "SELECT * FROM registrousuario";
	$resultado = mysqli_query($conexRapiBnB,$consulta);

	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
            $Email = $row['correo'];
            $usuario = $row['usuario'];
            $contra = $row['contraseña'];
            $contra2 = $row['contraseña2'];
            $Nombre = $row['nombre'];
            $Apellido = $row['apellido'];
            $edad = $row['edad'];
            $numero = $row['telefono'];
            $interes = $row['interes'];
            $fotos = $row['fotos'];
	?>
        <div>
            <?php
            echo("$Email");
            echo("$usuario ");
            echo("$contra ");
            echo("$contra2 ");
            echo("$Nombre ");
            echo("$Apellido ");
            echo("$edad ");
            echo("$numero "); 
            echo("<hr>");
        ?>
        </div> 

	    <?php

	    }
	}

}

?>