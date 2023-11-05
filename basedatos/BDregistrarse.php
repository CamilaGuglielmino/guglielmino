<?php
require_once("basedatos/conexion.php");

if (isset($_POST['registrarse'])) {
    if (strlen($_POST['Email']) >= 1) {
        $ID = mt_rand(1, 999);
        $Email = trim($_POST['Email']);
        $usuario = trim($_POST['usuario']);
        $contra = trim($_POST['contra']);
        $contra2 = trim($_POST['contra2']);
        //$Nombre = trim($_POST['Nombre']);
        // $Apellido = trim($_POST['Apellido']);
        //$edad = trim($_POST['edad']);
        //$numero = trim($_POST['numero']);

        $consulta = "INSERT INTO registrousuario(ID,correo,usuario,contraseña,contraseña2) VALUES ('$ID','$Email','$usuario','$contra','$contra2')";
        $resultado = mysqli_query($conexRapiBnB, $consulta);
        //session_start();
       // $_SESSION['user'] = $Email;
       // $ej = mysqli_num_rows($resultado);
        if ($resultado) {
            header("Location: editarPerfil.php");
        } else {
        
   
        }

    }
}

?>