<html>
    <head>
        <title>Recuperacion</title>
        <meta charset="utf-8">
	    <link rel="stylesheet" type="text/css" href="styles.css">
    </head>
<body>
    <?php
       $emailError="";

       if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $Email = trim($_POST['Email']);

        if($Email==""){
            $emailError="Ingrese su correo electrónico.<br>";
        }

       }
    ?>
<form action="" method="POST">
    <h4 style="text-align:left;">Recuperar contrase&ntildea: </h4><br>
    <p> 
    Vamos a enviarte un e-mail para que puedas cambiar tu contrase&ntildea.
    </p><br>

    E-mail:<br>
    <input type="email" name="Email"><br>
    <span class="error"> <?php echo $emailError; ?></span>
    
    <input type="submit" value="ENVIAR">
</form>

</body>

</html>