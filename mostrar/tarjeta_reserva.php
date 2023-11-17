<?php
require_once("../basedatos/conexion.php");
include_once("../basedatos/validar_sesion.php");



if (isset($_GET['reservar'])) {

        $idusuario = trim($_GET['usuario']);
        $idalojamiento = trim($_GET['alojamiento']);
        $tiempoMin = trim($_GET['checkin']);
        $tiempoMax = trim($_GET['checkout']);


        $consul="SELECT * FROM registrousuario WHERE id ='$idusuario'";
        $resul1 =mysqli_query($conexRapiBnB, $sql);
        while($row1 = mysqli_fetch_array($resul1)){
        $status= $row1["tipo"];

        $sql = "SELECT COUNT(*) total FROM registroreserva WHERE idusuario = '$idusuario'";
        $result = mysqli_query($conexRapiBnB, $sql);
        $fila = mysqli_fetch_assoc($result);
        echo 'Número de total de registros: ' . $fila['total'];
        $num = $fila['total'];
        echo $num;
        if($status == "Regular" or $status == "En espera"){   
                if($num=="0"){
                        $estado="En espera";
                        $consulta = "INSERT INTO registroreserva(idalojamiento, idusuario, fechainicio, fechafin, estado) VALUES ('$idalojamiento','$idusuario', '$tiempoMin', '$tiempoMax', '$estado)";
                        $resultado = mysqli_query($conexRapiBnB, $consulta);
                        if ($resultado) {
                        $mensaje = 'Su reserva se realizó con exito, espere confirmación del dueño del alojamiento'; // se guarda en mensaje el texto que quieras mostrar
                        header("Location: ../index.php?Message=" . urlencode($mensaje));
                        } 
                }else {
                $mensaje = 'No se pudo realizar la reserva, ya tiene una activa'; // se guarda en mensaje el texto que quieras mostrar
                header("Location: ../index.php?Message=" . urlencode($mensaje));
                }
        }else{
                $estado="En espera";
                $consulta = "INSERT INTO registroreserva(idalojamiento, idusuario, fechainicio, fechafin, estado) VALUES ('$idalojamiento','$idusuario', '$tiempoMin', '$tiempoMax', '$estado)";
                $resultado = mysqli_query($conexRapiBnB, $consulta);
                if ($resultado) {
                $mensaje = 'Su reserva se realizó con exito, espere confirmación del dueño del alojamiento'; // se guarda en mensaje el texto que quieras mostrar                        header("Location: ../index.php?Message=" . urlencode($mensaje));
                }  
        }
}
}
