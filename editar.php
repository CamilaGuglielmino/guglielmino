<?php
include("basedatos/validar_sesion.php");
include("basedatos/conexion.php");

$email=$_SESSION['user'];


echo"$email";

if (isset($_POST['editar'])) {
    echo"$email";
        
        $usuario = $_POST['usuario'];
        $contraseña = $_POST['contraseña'];
        $contraseña2 = $_POST['contraseña2'];
        $Nombre = trim($_POST['nombre']);
        $Apellido = trim($_POST['apellido']);
        $edad = trim($_POST['edad']);
        $numero = trim($_POST['numero']);
        $intereses = trim($_POST['intereses']);
        $imagen = '';
       
        $sql = "UPDATE registrousuario SET usuario='$usuario', contraseña='$contraseña', contraseña2='$contraseña2', nombre='$Nombre', apellido='$Apellido', edad='$edad', telefono='$numero', intereses = '$intereses', imagen = '$imagen' where correo='$email'";
        $resultado = mysqli_query($conexRapiBnB,$sql);
          
         
  
        
        //session_start();
        // $_SESSION['user'] = $Email;
        // $ej = mysqli_num_rows($resultado);
        if ($resultado) {
            echo"$email";
            session_start();
            $_SESSION["user"] = $email;
            header("Location: indexx.php");
        } else {
        }
    }

?>