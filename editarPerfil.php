<?php
    include("basedatos\conexion.php");
    include("basedatos\BDusuarios.php");
?>

<html>
    <head>
        <title> EDITAR PERFIL </title>
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <?php

       if(isset($_POST['editar'])){
        $Email = $_POST['Email'];
        $usuario = $_POST['usuario'];
        $contra = $_POST['contra'];
        $contra2 = trim($_POST['contra2']);
        $Nombre = trim($_POST['Nombre']);
        $Apellido = trim($_POST['Apellido']);
        $edad = trim($_POST['edad']);
        $numero = trim($_POST['numero']);
        $interes = $row['interes'];
        $fotos = $row['fotos'];

        $sql = "UPDATE registrousuario set usuario='$usuario',contraseña='$contra',contraseña2='$contra2',nombre='$Nombre',apellido='$Apellido',edad='$edad',telefono='$numero', interes = '$interes',
        fotos = '$fotos' where correo='$Email'";
        $resultado = mysqli_query($conexRapiBnB,$sql);
    }else{
       
       $buscar="rocio@gmail.com";

       $sql= "SELECT * FROM registrousuario where correo='$buscar'";
       $resultado = mysqli_query($conexRapiBnB,$sql);

       if ($resultado) {
		while ($row = $resultado->fetch_array()) {
            $Email = $row['correo'];
            $usuario = $row['usuario'];
            $contra = $row['contraseña'];
            $contra2 = $row['contraseña2'];
            $Nombre = $row['nombre'];
            $Apellido = $row['apellido'];
            $edad = $row['edad'];
            $numero = $row['telefono'];
            $interes = $row['interes'];
            $fotos = $row['fotos'];
        }
       }

    ?>

    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
    <h4 style="text-align:left;">Cuenta de usuario: </h4><br>
    Nombre de usuario:<br>
        <input type="text" name="usuario" value="<?php echo("$usuario")?>"><br>
        <span class="valido"> 
            <?php echo ("Debe tener 6 caracteres, puede contener letras y números, sin espacios en blanco ni caracteres especiales."); 
            ?>
        </span><br>

        Contrase&ntildea:</a><br>
        <input type="password" name="contra" value="<?php echo("$contra")?>"><br>

        Confirmar contrase&ntildea:<br>
        <input type="password" name="contra2" value="<?php echo("$contra2")?>"><br>

    <h4 style="text-align:left;">Informaci&oacuten personal:</h4><br>  
        Nombre(s):<br> 
            <input type="text" name="Nombre" value="<?php echo("$Nombre")?>"><br>
        

        Apellido:<br> 
            <input type="text" name="Apellido" value="<?php echo("$Apellido")?>"><br>

        Edad:<br> 
            <input type="number" name="edad" value="<?php echo("$edad")?>"><br>
        
        WhatsApp/Teléfono m&oacutevil:<br> 
            <input type="number" name="numero" value="<?php echo("$numero")?>"><br>
       
        Interes:<br>
        <input type: "text" name="intereses"> <br><br>

        Foto:<br>
        <input type="file" name="foto"><br><br>
        

    <input type="submit" name="editar" value="GUARDAR CAMBIOS"><br><br>
    <button type="buttom"><a href="index.php"> Cancelar </a></button>
  
</form>
    <?php 
        }
    ?>

</body>
</html>