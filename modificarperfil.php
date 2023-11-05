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
       
       $buscar="cami@gmail.com";

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
          //  $interes = $row['interes'];
          //  $fotos = $row['fotos'];
        }
       }
      }
    ?>