<?php
include("../basedatos/conexion.php");
$ID = isset($_GET['ID']) ? $_GET['ID'] : '';
echo '$ID';


if (isset($_POST['validar'])) {


    $tipo = 'Verificado';
    $sql = "UPDATE registrousuario SET  tipo= '$tipo' WHERE id = $ID " ;
    $resultado = mysqli_query($conexRapiBnB,$sql);
    if ($resultado) {
       
        $mensaje = 'Se guardaron los cambios correctamente'; // se guarda en mensaje el texto que quieras mostrar
        header("Location: listausuarios.php?Message=" . urlencode($mensaje));
    } else {
        $mensaje = 'No se puede realizar los cambios en estos momentos'; // se guarda en mensaje el texto que quieras mostrar
        header("Location: listausuarios.php?Message=" . urlencode($mensaje));
    }

}
if (isset($_POST['rechazar'])) {
    $tipo = 'Regular';
    $sql = "UPDATE registrousuario SET  tipo= '$tipo' WHERE id = $ID";
    $resultado = mysqli_query($conexRapiBnB,$sql);
    if ($resultado) {
       
        $mensaje = 'Se guardaron los cambios correctamente'; // se guarda en mensaje el texto que quieras mostrar
        header("Location: listausuarios.php?Message=" . urlencode($mensaje4));
    } else {
        $mensaje = 'No se puede realizar los cambios en estos momentos'; // se guarda en mensaje el texto que quieras mostrar
        header("Location: listausuarios.php?Message=" . urlencode($mensaje4));
    }
}
if (isset($_POST['activar'])) {
    $estado= 'activo';
    $sql = "UPDATE registroalojamiento SET  statu= '$estado' WHERE ID = $ID " ;
    $resultado = mysqli_query($conexRapiBnB,$sql);
    if ($resultado) {
       
        $mensaje = 'Se guardaron los cambios correctamente'; // se guarda en mensaje el texto que quieras mostrar
        header("Location: listadealojamientos.php?Message=" . urlencode($mensaje));
    } else {
        $mensaje = 'No se puede realizar los cambios en estos momentos'; // se guarda en mensaje el texto que quieras mostrar
        header("Location: listadealojamientos.php?Message=" . urlencode($mensaje));
    }

}
if (isset($_POST['rechazarr'])) {
    
    $sql = "DELETE FROM registroalojamiento where ID='$ID' ";
    $resultado = mysqli_query($conexRapiBnB,$sql);
    if ($resultado) {
       
        $mensaje = 'Se elimino la publicación'; // se guarda en mensaje el texto que quieras mostrar
        header("Location: listadealojamientos.php?Message=" . urlencode($mensaje4));
    } else {
        $mensaje = 'No se pudo eliminar'; // se guarda en mensaje el texto que quieras mostrar
        header("Location: listadealojamientos.php?Message=" . urlencode($mensaje4));
    }
}
?>
