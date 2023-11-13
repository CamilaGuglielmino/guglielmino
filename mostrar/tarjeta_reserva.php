<?php
require_once("../basedatos/conexion.php");
include_once("../basedatos/validar_sesion.php");


if (isset($_GET['registro'])) {
        
    $idalojamiento = trim($_GET['idalojamiento']);
    $idusuario = trim($_GET['idusuario']);
    $tiempoMin = trim($_GET['date']);
    $tiempoMax = trim($_GET['date1']);

    $consulta = "INSERT INTO registroreserva(idalojamiento, idusuario, fechainicio, fechafin) VALUES ('$idalojamiento','$idusuario', '$tiempoMin', '$tiempoMax')";
    $resultado = mysqli_query($conexRapiBnB, $consulta);
    //session_start();
    // $_SESSION['user'] = $Email;
    // $ej = mysqli_num_rows($resultado);
    if ($resultado) {
    
            $mensaje4 = 'Su reserva se realizó con exito'; // se guarda en mensaje el texto que quieras mostrar
           header("Location: ../indexx.php?Message4=" . urlencode($mensaje4));
           }else{
                   $mensaje4 = 'No se pudo realizar la reserva'; // se guarda en mensaje el texto que quieras mostrar
                   header("Location: ../formularioalojamiento.php?Message4=" . urlencode($mensaje4)); 
           }

  
}
