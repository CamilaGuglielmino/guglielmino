<?php
$conexRapiBnB = mysqli_connect("localhost","root","","rapibnb"); 

if(mysqli_connect_errno()){
    printf ("Falló la conexión a la base de datos: %s\n", mysqli_connect_errno());
    exit();
}
?>