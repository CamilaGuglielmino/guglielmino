<?php

require_once("basedatos/conexion.php");

if (isset($_POST['registrarse'])) {
    if (strlen($_POST['Email']) >= 1) {
        $ID = mt_rand(1, 999);
        $Email = trim($_POST['Email']);
        $usuario = trim($_POST['usuario']);
        $contraseña = trim($_POST['contra']);
        $contraseña2 = trim($_POST['contra2']);
        $tipo="Regular";
        
        $consulta = "INSERT INTO registrousuario(ID,correo,usuario,contra,contra2, tipo) VALUES ('$ID','$Email','$usuario','$contraseña','$contraseña2', '$tipo')";
        $resultado = mysqli_query($conexRapiBnB, $consulta);
        //session_start();
        // $_SESSION['user'] = $Email;
        // $ej = mysqli_num_rows($resultado);
        if ($resultado) {
            session_start();
            $_SESSION["user"] = $Email;
            $mensaje4 = 'El usuario se creo con exito, edite el perfil para continuar'; // se guarda en mensaje el texto que quieras mostrar
            header("Location: editarPerfil.php?Message4=" . urlencode($mensaje4));
        } else {
        }
    }
}
