<?php
include_once("basedatos/BDalojamiento.php");

$sql = "SELECT * FROM registroalojamiento";
$result = mysqli_query($conexRapiBnB, $sql);



    while ($record = mysqli_fetch_assoc($result)) {
?>
        <div class="card hovercard">

            <div class="cardheader">
                <div class="avatar">
                    <img alt="" src="<?php echo $record['image']; ?>" width=80px height=auto">
                </div>
            </div>

            <div class="card-body info">
                <div class="title">
                    <a href="#"><?php echo $record['titulo']; ?></a>
                </div>
                <div class="desc"><?php echo $record['descripcion']; ?></div>
                <div class="desc"><?php echo $record['ciudad']; ?></div>
            </div>
        </div>
<?php
    }

?>