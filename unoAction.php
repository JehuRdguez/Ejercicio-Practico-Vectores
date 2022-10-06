<?php include("header.php"); ?>

<div class="container-fluid">

<a class="btn btn-outline-dark btn-lg" href="menu.php">Regresar al menú</a><br><br>


<?php
$tamano=$_POST["tamano"];

$vectorTam = array_fill(0, $tamano, 0);

print_r($vectorTam);

echo "</br></br>El tamaño del vector es de $tamano";

?>

</div>


<?php include("footer.php"); ?>
