<html>
    <?php
    require_once("basedatos/conexion.php");
    
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
    
    $sql= "SELECT * FROM registrousuario where correo='$email' and contra= '$contraseña'";
    $resultado = mysqli_query($conexRapiBnB,$sql);
    session_start();
    $_SESSION['user'] = $email;
    $ej = mysqli_num_rows($resultado);
    if($ej > 0) {
        $admi="adm@gmail.com";
        if(!($email == $admi)){
            $mensaje = 'Bienvenido'; // se guarda en mensaje el texto que quieras mostrar
            header("Location: index.php?Message=" . urlencode($mensaje));
   
        }else{
            $mensaje = 'Bienvenido';
           
            header("Location: administrador/indexadm.php?Message=" . urlencode($mensaje));
        }  
        
    }
    else{
        $mensaje = 'Email o contraseña incorrecta'; // se guarda en mensaje el texto que quieras mostrar
        header("Location: iniciarsesion.php?Message=" . urlencode($mensaje));
        
    }

?>
</html>