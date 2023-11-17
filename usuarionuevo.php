<?php

require_once("basedatos/conexion.php");

if (isset($_POST['registrarse'])) {
    if (strlen($_POST['Email']) >= 1) {
        $ID = mt_rand(1, 999);
        $Email = trim($_POST['Email']);
        $usuario = trim($_POST['usuario']);
        $contraseña = trim($_POST['contra']);
        $contraseña2 = trim($_POST['contra2']);
        $tipo = "Regular";
        $sql = "SELECT * FROM registrousuario WHERE correo = '$_POST[Email]'";
        $result = mysqli_query($conexRapiBnB, $sql);
        if($contraseña != $contraseña2){
            $mensaje = 'Las contraseñas no son iguales'; // se guarda en mensaje el texto que quieras mostrar
            header("Location: registrarse.php?nom=$Email&usu=$usuario&Message=" . urlencode($mensaje));
            

        }else if (mysqli_num_rows($result) < 1) {

            $consulta = "INSERT INTO registrousuario(ID,correo,usuario,contra,contra2, tipo) VALUES ('$ID','$Email','$usuario','$contraseña','$contraseña2', '$tipo')";
            $resultado = mysqli_query($conexRapiBnB, $consulta);
          
            if ($resultado) {
                session_start();
                $_SESSION["user"] = $Email;
                $mensaje = 'El usuario se creo con exito, edite el perfil para continuar'; // se guarda en mensaje el texto que quieras mostrar
                header("Location: editarPerfil.php?Message=" . urlencode($mensaje));
            } else {
            }
        }else{
            $mensaje = 'El email ingresado ya se encuentra registrado. Inicie sesión'; // se guarda en mensaje el texto que quieras mostrar
            header("Location: iniciarsesion.php?Message=" . urlencode($mensaje));
        }
    }
}
