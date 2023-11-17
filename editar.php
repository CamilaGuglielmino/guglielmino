<?php
include("basedatos/validar_sesion.php");
include("basedatos/conexion.php");

$email=$_SESSION['user'];


if (isset($_POST['editar'])) {
    
    
        $Nombre = trim($_POST['nombre']);
        $Apellido = trim($_POST['apellido']);
        $edad = trim($_POST['edad']);
        $numero = trim($_POST['numero']);
        $intereses = trim($_POST['intereses']);
        $tipo= "Regular";
 
        $sql = "UPDATE registrousuario SET nombre='$Nombre', apellido='$Apellido', edad='$edad', telefono='$numero', intereses = '$intereses', tipo='$tipo'where correo='$email'";
        $resultado = mysqli_query($conexRapiBnB,$sql);
        if ($resultado) {
            
            session_start();
            $_SESSION["user"] = $email;
            
            $mensaje = 'Se guardaron los cambios correctamente'; // se guarda en mensaje el texto que quieras mostrar
            header("Location: editarPerfil.php?Message=" . urlencode($mensaje));
        } else {
            $mensaje = 'No se puede realizar los cambios en estos momentos'; // se guarda en mensaje el texto que quieras mostrar
            header("Location: editarPerfil.php?Message=" . urlencode($mensaje));
        }
    }

?>