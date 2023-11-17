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
            $mensaje = 'Se cambio correctamente su contraseña'; // se guarda en mensaje el texto que quieras mostrar
            header("Location: editarPerfil.php?Message=" . urlencode($mensaje));
           
        } else {
            $mensaje2 = 'No se pudo cambiar su foto de perfil'; // se guarda en mensaje el texto que quieras mostrar
            header("Location: editarPerfil.php?Message=" . urlencode($mensaje));
        }
}
if (isset($_POST['verificacion'])) {
    $archivo = '';
    $nombrefile = $_FILES["archivo"]["name"];
    $archivo2 = $_FILES["archivo"]["tmp_name"];
    $ruta ="documento";
    $ruta = $ruta."/".$nombrefile;
    move_uploaded_file($archivo2,$ruta);
    $archivo = $ruta;
    

    $tipo = 'En espera';
    
        $sql = "UPDATE registrousuario SET tipo = '$tipo', files = '$archivo' where correo='$email'";
        $resultado = mysqli_query($conexRapiBnB,$sql);
        
        if ($resultado) {
            
            $mensaje = 'Se evaluara su verificación'; // se guarda en mensaje el texto que quieras mostrar
            header("Location: editarPerfil.php?Message=" . urlencode($mensaje));
           
        } else {
            $mensaje = 'No se pudo cambiar su foto de perfil'; // se guarda en mensaje el texto que quieras mostrar
            header("Location: editarPerfil.php?Message=" . urlencode($mensaje));
        }
}
