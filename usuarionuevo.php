<?php
/*require_once("basedatos/conexion.php");
$emailError = $usuarioError = $contraError = $contra2Error = $nombreError = $apellidoError = $edadError = $numeroError = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Email = trim($_POST['Email']);
    $usuario = trim($_POST['usuario']);
    $contraseña = trim($_POST['contra']);
    $contraseña2 = trim($_POST['contra2']);

/*
    if ($correo == "") {
        $emailError = "Ingrese su e-mail.<br>";
    }

    if (($usuario == "") || ((strlen($usuario) < 5) || (strlen($usuario) > 10))) {
        $usuarioError = "Ingrese un nombre de usuario.";
    }

    if (($contraseña == "") || (strlen($contraseña2) != 6)) {
        $contraError = "Ingrese una contrase&ntildea.";
    }

    if (($contraseña2 == "") || ($contra2 != $contraseña)) {
        $contra2Error = "Las contrase&ntildea no coinciden.";
    }
}*/
require_once("basedatos/conexion.php");

if (isset($_POST['registrarse'])) {
    if (strlen($_POST['Email']) >= 1) {
        $ID = mt_rand(1, 999);
        $Email = trim($_POST['Email']);
        $usuario = trim($_POST['usuario']);
        $contraseña = trim($_POST['contra']);
        $contraseña2 = trim($_POST['contra2']);


        $consulta = "INSERT INTO registrousuario(ID,correo,usuario,contra,contra2) VALUES ('$ID','$Email','$usuario','$contraseña','$contraseña2')";
        $resultado = mysqli_query($conexRapiBnB, $consulta);
        //session_start();
        // $_SESSION['user'] = $Email;
        // $ej = mysqli_num_rows($resultado);
        if ($resultado) {
            session_start();
            $_SESSION["user"] = $Email;
            header("Location: editarPerfil.php");
        } else {
        }
    }
}
