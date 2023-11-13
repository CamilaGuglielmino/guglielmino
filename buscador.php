<?php
include 'basedatos/conexion.php';
?>
<html>
    <!-- buscador en la pagina principal-->
    <?php
    if(isset($_GET['enviar'])){
        $busqueda = $_GET['dato'];
        $provincia = $_REQUEST['provincia'];
        $etiqueta= $_REQUEST['etiqueta'];
        $consul="SELECT * FROM registroalojamiento WHERE Provincia = '$provincia' or titulo='$dato' or etiqueta='$etiqueta'";
        $consulta = mysqli_query($conexRapiBnB,$consul);

        while ($record = mysqli_fetch_assoc($consulta)) {
        

    }


}
?>

</html>