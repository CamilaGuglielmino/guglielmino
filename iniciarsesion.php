<html>
    <head>
    <title>Ingrese sus datos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
       <?php
            $emailError=$contraError="";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {

                $Email = $_POST['Email'];
                $Contra = $_POST['Contra'];

                if($Email==""){
                    $emailError="Ingrese su correo electrónico.<br>";
                }

                if($Contra==""){
                    $contraError = "Ingrese su contraseña";
                }
            }
       ?>

        <form method="POST">
           <h2> Iniciar sesi&oacuten:</h2><br>

            E-mail:<br>    
                <input type="email" name="Email" > <br>
                <span class="error"> <?php echo $emailError; ?></span><br>

            Contrase&ntildea:<br>
               <input type="password" name="Contra"><br>
               <span class="error"> <?php echo $contraError; ?></span><br>

            <input type="submit" name="ingresar" value="Ingresar"><br><br>
          
            <a href="recuperarcontra.php"> ¿Olvidaste tu contrase&ntildea?
        </a>
        </form>
        <?php 
               include("basedatos\BDusuarios.php");
            ?>
    </body>
</html>