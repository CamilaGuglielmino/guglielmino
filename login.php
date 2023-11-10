<html>
    <?php
    require_once("basedatos/conexion.php");
    
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    
    $sql= "SELECT * FROM registrousuario where correo='$email' and contraseña= '$contraseña'";
    $resultado = mysqli_query($conexRapiBnB,$sql);
    session_start();
    $_SESSION['user'] = $email;
    $ej = mysqli_num_rows($resultado);
    if($ej > 0) {
        $admi="adm@gmail.com";
        if(!($email == $admi)){
            echo "<script> alert ('Bienvenido');
            Location href=' indexx.php ', </scrip>";
            
        }else{
            header("Location: administrador/indexadm.php");
        }
        
        
    }
    else{
    
        header("Location: iniciarsesion.php");
    }

?>
</html>