<?php
include("basedatos/validar_sesion.php");
include("basedatos/conexion.php");

$email=$_SESSION['user'];


if (isset($_POST['cambiarContraseña'])) {

    $contraseña = $_POST['contraseña'];
    $contraseña2 = $_POST['contraseña2'];
       
        $sql = "UPDATE registrousuario SET contra='$contraseña', contra2='$contraseña2' where correo='$email'";
        $resultado = mysqli_query($conexRapiBnB,$sql);
        
        if ($resultado) {    
            session_start();
            $_SESSION["user"] = $email; 
            $mensaje2 = 'Se cambio correctamente su contraseña'; // se guarda en mensaje el texto que quieras mostrar
            header("Location: editarPerfil.php?Message1=" . urlencode($mensaje2));
           
        } else {
            $mensaje2 = 'No se pudo cambiar su foto de perfil'; // se guarda en mensaje el texto que quieras mostrar
            header("Location: editarPerfil.php?Message1=" . urlencode($mensaje2));
        }
}
if (isset($_POST['verificacion'])) {

    $tipo = 'En espera';
    
        $sql = "UPDATE registrousuario SET tipo = '$tipo' where correo='$email'";
        $resultado = mysqli_query($conexRapiBnB,$sql);
        
        if ($resultado) {
            
            $mensaje3 = 'Se evaluara su verificación'; // se guarda en mensaje el texto que quieras mostrar
            header("Location: editarPerfil.php?Message1=" . urlencode($mensaje3));
           
        } else {
            $mensaje2 = 'No se pudo cambiar su foto de perfil'; // se guarda en mensaje el texto que quieras mostrar
            header("Location: editarPerfil.php?Message1=" . urlencode($mensaje2));
        }
}
