
<?php 
include("conexion.php");

if (isset($_POST['registrarse'])) {
    if (strlen($_POST['Email']) >= 1) {
	    
        $Email = trim($_POST['Email']);
        $usuario = trim($_POST['usuario']);
        $contra = trim($_POST['contra']);
        $contra2 = trim($_POST['contra2']);
        $Nombre = trim($_POST['Nombre']);
        $Apellido = trim($_POST['Apellido']);
        $edad = trim($_POST['edad']);
        $numero = trim($_POST['numero']);
        
       
	    $consulta = "INSERT INTO registrousuario(correo,usuario,contraseña,contraseña2,nombre,apellido,edad,telefono) VALUES ('$Email','$usuario','$contra','$contra2','$Nombre','$Apellido','$edad','$numero')";
	    $resultado = mysqli_query($conexRapiBnB,$consulta);

	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php 
           header("Location: editarPerfil.php");
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   
}

?>