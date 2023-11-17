<?php 
include("basedatos/conexion.php");
$id= isset($_GET['ID']) ? $_GET['ID'] : '';

$consul="SELECT * FROM registrousuario WHERE id='$id'";

$result = mysqli_query($conexRapiBnB,$consul);
while($row=mysqli_fetch_array($result)){

$status =$row['tipo'];

if (isset($_POST['oferta'])) {
        $ID = mt_rand(1,999);
        $idu=$id;
        $provincia = $_REQUEST['provincia'];
        $ciudad = trim($_POST['ciudad']);
        $direccion = trim($_POST['direccion']);
        $tipo_propiedad = $_REQUEST['tipoPropiedad'];
        $costo = trim($_POST['costo']);
        $cupo = trim($_POST['cupo']);
        $titulo = trim($_POST['titulo']);
        $fecha= trim($_POST['fechafin']);
        $descripcion = trim($_POST['descripcion']);
        $ser = $_POST['servicios'];
        $servicios = implode(', ', $ser);
       
       



        $image1 = '';
        $nombreimg = $_FILES["imagen1"]["name"];
        $archivo = $_FILES["imagen1"]["tmp_name"];
        $ruta ="img_alojamientos";
        $ruta = $ruta."/".$nombreimg;
        move_uploaded_file($archivo,$ruta);
        $image1 = $ruta;

        $image2 = '';
        $nombreimg = $_FILES["imagen2"]["name"];
        $archivo = $_FILES["imagen2"]["tmp_name"];
        $ruta ="img_alojamientos";
        $ruta = $ruta."/".$nombreimg;
        move_uploaded_file($archivo,$ruta);
        $image2 = $ruta;

        $image3 = '';
        $nombreimg = $_FILES["imagen3"]["name"];
        $archivo = $_FILES["imagen3"]["tmp_name"];
        $ruta ="img_alojamientos";
        $ruta = $ruta."/".$nombreimg;
        move_uploaded_file($archivo,$ruta);
        $image3 = $ruta;

        
        $image5 = '';
        $nombreimg = $_FILES["imagen5"]["name"];
        $archivo = $_FILES["imagen5"]["tmp_name"];
        $ruta ="img_alojamientos";
        $ruta = $ruta."/".$nombreimg;
        move_uploaded_file($archivo,$ruta);  
        $image5 = $ruta;
        
        
        $sql = "SELECT COUNT(*) total FROM registroalojamiento WHERE idusuario = '$idu'";
        $result = mysqli_query($conexRapiBnB,$sql);
        $fila = mysqli_fetch_assoc($result);
       
        $num= $fila['total'];
        


        if($status == "Regular" or $status == "En espera"){   
                if($num=="0"){
               
                $status="En espera";
	        $consulta = "INSERT INTO registroalojamiento(ID, idusuario, Provincia, ciudad, direccion, tipoPropiedad, serviciosBasicos,costo,cupo,titulo,descripcion,imagen, imagen2, imagen3, fechalimite, imagen5,statu) VALUES ('$ID', '$idu','$provincia','$ciudad','$direccion','$tipo_propiedad','$servicios','$costo','$cupo','$titulo','$descripcion','$image1', '$image2', '$image3', '$fecha', '$image5', '$status')";
	        $resultado = mysqli_query($conexRapiBnB,$consulta);
	        if ($resultado) {
                
                 $mensaje = 'Su publicacion esta en espera'; // se guarda en mensaje el texto que quieras mostrar
                header("Location: index.php?Message=" . urlencode($mensaje));
                }
                }else{
                        $mensaje = 'No se puede realizar, usted tiene una publicación activa'; // se guarda en mensaje el texto que quieras mostrar
                        header("Location: formalojamiento.php?Message=" . urlencode($mensaje)); 
                }
        
        } else {
                $status="Activo";
	        $consult = "INSERT IGNORE registroalojamiento(ID, idusuario, Provincia, ciudad, direccion, tipoPropiedad, serviciosBasicos,costo,cupo,titulo,descripcion,imagen, imagen2, imagen3, fechalimite, imagen5,statu) VALUES ( '$ID', '$idu','$provincia','$ciudad','$direccion','$tipo_propiedad','$servicios','$costo','$cupo','$titulo','$descripcion','$image1', '$image2', '$image3', '$fecha', '$image5', '$status')";
	        $resultado1 = mysqli_query($conexRapiBnB,$consult);
                if ($resultado1) {
                $mensaje = 'Publicacion creada'; // se guarda en mensaje el texto que quieras mostrar
                header("Location: index.php?Message=" . urlencode($mensaje));
                }else{
                $mensaje = 'No se puede realizar los cambios en estos momentos'; // se guarda en mensaje el texto que quieras mostrar
                header("Location: formularioalojamiento.php?Message=" . urlencode($mensaje));                 
                }
        }
	    	
}
}
?>
