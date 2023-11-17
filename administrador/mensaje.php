<?php
include("../basedatos/conexion.php");

$sql = "SELECT * FROM registrousuario";

$resultado = mysqli_query($conexRapiBnB, $sql);

while($row = mysqli_fetch_array($resultado) ){
    $cant1= '0';
    
    if ($row['tipo'] == 'En espera') {
       $cant1= '1';
    }else{
        $cant2= '0';
    }
   
}
if($cant1>'1') { ?>
    <div class="card mb-3" style="max-width: 540px; align-content: center;">
        <div class="row g-0">
            <div class="card-body">
                <p class="card-text"><a href="listausuarios.php"> Hay solicitudes de Verificación de usuario</a></p>
            </div>
        </div>
    </div>
<?php
}

$sql1 = "SELECT * FROM registroalojamiento";

$resultado1 = mysqli_query($conexRapiBnB, $sql1);
    
while($row1 = mysqli_fetch_array($resultado1) ){
    $cant3= '0';
        
        if ($row1['statu'] == 'En espera') {
           $cant3= '1';
        }else{
            $cant4= '0';
        }
}
if($cant3 >='1') { ?>
    <div class="card mb-3" style="max-width: 540px; align-content: center;">
       <div class="row g-0">
       <div class="card-body">
        <p class="card-text"><a href="listadealojamientos.php"> Hay solicitudes de Alojamientos</a></p>
        </div>
        </div>
    </div>
<?php
    } ?>