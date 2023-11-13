<?php
include("basedatos/validar_sesion.php");
include("basedatos/conexion.php");

$email=$_SESSION['user'];


if (isset($_POST['perfil'])) {

        $imagen = '';
        $nombreimg = $_FILES["imagen"]["name"];
        $archivo = $_FILES["imagen"]["tmp_name"];
        $ruta ="img_perfil";
        $ruta = $ruta."/".$nombreimg;
        move_uploaded_file($archivo,$ruta);
        $imagen = $ruta;
        if($nombreimg == '') {
            $imagen = 'img_perfil/R.jpeg';

        }
       
        $sql = "UPDATE registrousuario SET imagen = '$imagen' where correo='$email'";
        $resultado = mysqli_query($conexRapiBnB,$sql);
          
    
        if ($resultado) {
            echo"$email";
            session_start();
            $_SESSION["user"] = $email;
            $mensaje1 = 'Se cambio correctamente su foto de perfil'; // se guarda en mensaje el texto que quieras mostrar
            header("Location: editarPerfil.php?Message1=" . urlencode($mensaje1));
           
        } else {
            $mensaje1 = 'No se pudo cambiar su foto de perfil'; // se guarda en mensaje el texto que quieras mostrar
            header("Location: editarPerfil.php?Message1=" . urlencode($mensaje1));
        }
    }

?>