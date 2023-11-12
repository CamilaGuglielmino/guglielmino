<?php
include_once("basedatos/BDalojamiento.php");

$sql = "SELECT * FROM registroalojamiento";
$result = mysqli_query($conexRapiBnB, $sql);




    while ($record = mysqli_fetch_assoc($result)) {
      $ID=$record["ID"];
?>

<div class="col" >
<div class="card shadow sm" id="card">
  <img alt="" src="<?php echo $record['imagen']; ?>" class="img-thumbnail" alt="foto de perfil" style="position: static;">
  <div class="card-body">
    <h5 class="card-title"><a href="alojamiento.php?ID=<?php echo $ID;?>"><?php echo $record['titulo'], $ID;   ?></a></h5>
    <p class="card-text"><?php echo $record['descripcion']; ?>
  </div>
  
  <div class="d-flex justify-content.between aling-items-center">
    <div class="desc"><?php echo $record['ciudad']; ?></div>
    <div class="desc"><?php echo $record['costo']; ?></div>
  </div>
</div>
</div>

        
<?php
    }

?>
