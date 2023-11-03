<html>
    <head>
        <title>Registrarse</title>
    <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
     <?php
           $emailError=$usuarioError=$contraError=$contra2Error=$nombreError=$apellidoError=$edadError=$numeroError="";
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $Email = trim($_POST['Email']);
                $usuario = trim($_POST['usuario']);
                $contra = trim($_POST['contra']);
                $contra2 = trim($_POST['contra2']);
                $Nombre = trim($_POST['Nombre']);
                $Apellido = trim($_POST['Apellido']);
                $edad = trim($_POST['edad']);
                $numero = trim($_POST['numero']);
               
                if($Email==""){
                    $emailError="Ingrese su e-mail.<br>";
                }

                if(($usuario=="") || ((strlen($usuario)<5) || (strlen($usuario)>10))){
                    $usuarioError="Ingrese un nombre de usuario.";
                }

                if(($contra=="") || (strlen($contra)!=6)){
                    $contraError = "Ingrese una contrase&ntildea.";
                }

                if(($contra2=="") || ($contra2!=$contra)){
                    $contra2Error = "Las contrase&ntildea no coinciden.";
                }

                if(($Nombre=="") || (strlen($Nombre)<3)){
                    $nombreError = "Ingrese un nombre.";
                }

                if(($Apellido=="") || (strlen($Apellido)<3)){
                    $apellidoError = "Ingrese un apellido.";
                }

                if($edad="" || ($edad<18)){
                   $edadError="Ingrese una edad.";
                }

                if($numero==""){
                    $numeroError ="Ingrese un n&uacutemero.";
                }


            }
        

        ?>

        <form method="POST">
        <p style="text-align:left;"><span class="error"> (*) Campos obligatorios</span></p><br>
        <h4 style="text-align:left;">Cuenta de usuario: </h4><br>

        <span class="error">*</span> E-mail:<br>    
            <input type="email" name="Email" ><br>
        <span class ="valido">
            <?php
            echo("Ingrese un e-mail válido y que utilice con frecuencia.<br>");
            ?>
        </span>
        <span class="error"> <?php echo $emailError; ?></span><br><br>

        <span class="error">*</span> Nombre de usuario:<br>
        <input type="text" name="usuario" ><br>
        <span class="valido"> 
            <?php echo ("Debe tener entre 5 y 10 caracteres, puede contener letras y números, sin espacios en blanco ni caracteres especiales."); 
            ?>
        </span><br>
        <span class="error"> <?php echo $usuarioError; ?></span><br><br>

        <span class="error">*</span> Contrase&ntildea:</a><br>
            <input type="password" name="contra" required=""><br>
        <span class="error"> <?php echo $contraError; ?></span><br><br>

        <span class="error">*</span> Confirmar contrase&ntildea:<br>
            <input type="password" name="contra2" required=""><br>
        <span class="error"> <?php echo $contra2Error; ?></span><br><br>

    <h4 style="text-align:left;">Informaci&oacuten personal:</h4><br> 

        <span class="error">*</span> Nombre(s):<br> 
            <input type="text" name="Nombre"><br>
        <span class="error"> <?php echo $nombreError; ?></span><br><br>

        <span class="error">*</span> Apellido:<br> 
            <input type="text" name="Apellido" required=""><br>
        <span class="error"> <?php echo $apellidoError; ?></span><br><br>  

        <span class="error">*</span> Edad:<br> 
            <input type="number" name="edad" required=""><br>
        <span class="error"> <?php echo $edadError; ?></span><br><br>
        
        <span class="error">*</span> WhatsApp/Teléfono m&oacutevil:<br> 
            <input type="number" name="numero" required=""><br>
        <span class="error"> <?php echo $numeroError; ?></span><br><br>

        <input type="submit" name="registrarse" value="CREAR CUENTA">

        </form>
        
            <?php
            include("basedatos\BDregistrarse.php"); 
            ?>
    </body>
</html>