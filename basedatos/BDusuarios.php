<?php 

include("conexion.php");

if (!empty($_POST['ingresar'])){
		$email = $_POST['Email'];
        $contra = $_POST['Contra'];

		$consulta ="SELECT * FROM registrousuario where correo='$email' and contraseña='$contra' ";
	    $resultado = mysqli_query($conexRapiBnB,$consulta);

		$ej = mysqli_num_rows($resultado);

		if($ej==1){
			?> 
	    	<h3 class="ok">¡Ingreso con &eacutexito!</h3>
           <?php
		    function editar_perfil(){
				return "chau";
			}

			header("location:editarPerfil.php");
		    //header ("location:index.php");
		}
		else if($ej==0){
			?>
			<h3 class="bad">Usuario no registrado</h3>
			<?php
		}
}
?>