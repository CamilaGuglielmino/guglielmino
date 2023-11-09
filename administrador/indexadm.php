<html>
    <?php
        require_once 'basedatos/validar_sesion.php';
        $email = $_SESSION['user'] ;
        $admi="admi@gmail.com";
        if(!($email == $admi)){
            header("Location: indexx.php");
        }
    ?>
</html>