<?php
include 'basedatos/conexion.php';
?>
<html>
    <!-- buscador en la pagina principal-->
    <?php
    if(isset($_GET['enviar'])){
        $busqueda = $_GET['busqueda'];
        $consulta = $conexRapiBnB->query("SELECT * FROM regristroalojamiento WHERE ciudad LIKE '%$busquedad%'");
        while ($row = $consulta-> fetch_array()){
            echo $row['ciudad']. '<br>'; 
        }
    }
    ?>


</html>