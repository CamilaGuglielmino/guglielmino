<?php
include_once("BDalojamiento.php");

$sql = "SELECT * FROM registroalojamiento";
$result = mysqli_query($conexRapiBnB, $sql);

while ($record = mysqli_fetch_assoc($result)) {
  $ID = $record["ID"];
  $estado = $record['statu'];
  if ($estado == 'En espera') {
?>
    <div class="col">
      <div class="card shadow sm" id="card">

      </div>
    </div>
  <?php
  }else{
    ?>
     <div class="col">
    <div class="card shadow sm" id="card">
      <img alt="" src="<?php echo $record['imagen']; ?>" class="img-thumbnail" alt="" style="position: static;">
      <div class="card-body">
        <h5 class="card-title"><a href="alojamiento.php?ID=<?php echo base64_encode($ID); ?>">
        <?php echo $record['titulo'];  ?></a></h5>
        <p class="card-text"><?php echo $record['descripcion']; ?> </p>
        <p class="card-text"><?php echo $record['ciudad']; ?>; <?php echo $record['Provincia'];  ?></p>
      </div>

    </div>
  </div>
    <?php
  }
  ?>

 


<?php
}

?>