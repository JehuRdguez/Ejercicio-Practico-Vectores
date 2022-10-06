<?php include("header.php"); ?>

<div class="container-fluid">

<a class="btn btn-outline-dark btn-lg" href="menu.php">Regresar al menú</a><br><br>


<?php
$valorUno=$_POST["valorUno"];
$valorDos=$_POST["valorDos"];
$valorTres=$_POST["valorTres"];


$llenarVector = array($valorUno, $valorDos, $valorTres);

print_r($llenarVector);

echo "</br></br>El vector se lleno con los datos: $valorUno, $valorDos, $valorTres";

?>

</div>


<?php include("footer.php"); ?>
