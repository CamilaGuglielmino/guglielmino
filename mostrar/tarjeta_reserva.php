<?php
require_once("../basedatos/conexion.php");

if (isset($_POST['registrarse'])) {
    
        $idalojamiento = trim($_POST['idalojamiento']);
        $idusuario= trim($_POST['idusuario']);

        $consulta = "INSERT INTO registroreserva(idalojamiento, idusuario) VALUES ('$idalojamiento','$idusuario')";
        $resultado = mysqli_query($conexRapiBnB, $consulta);
        //session_start();
        // $_SESSION['user'] = $Email;
        // $ej = mysqli_num_rows($resultado);
        if ($resultado) {
            
            header("Location: editarPerfil.php");
        } else {
          
        }
    
}

?>

