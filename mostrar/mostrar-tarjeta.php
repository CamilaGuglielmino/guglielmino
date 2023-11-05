<?php
include_once("basedatos/BDalojamiento.php");

$sql = "SELECT * FROM registroalojamiento";
$result = mysqli_query($conexRapiBnB, $sql);



    while ($record = mysqli_fetch_assoc($result)) {
?>
<div class="card" style="width: 18rem;">
  <img alt="" src="<?php echo $record['image']; ?>"">
  <div class="card-body">
    <h5 class="card-title"><a href="alojamiento.php"><?php echo $record['titulo']; ?></a></h5>
    <p class="card-text"><?php echo $record['descripcion']; ?>
  </div>
  
  <div class="card-body">
    <div class="desc"><?php echo $record['ciudad']; ?></div>
    <div class="desc"><?php echo $record['costo']; ?></div>
  </div>
</div>
        
<?php
    }

?>
