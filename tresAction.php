<?php include("header.php"); ?>

<div class="container-fluid">

<a class="btn btn-outline-dark btn-lg" href="menu.php">Regresar al menú</a><br><br>


<?php
$valorUno=$_POST["valorUno"];
$valorDos=$_POST["valorDos"];
$valorTres=$_POST["valorTres"];


$ordenarVector = array($valorUno, $valorDos, $valorTres);
arsort($ordenarVector);

print_r($ordenarVector);

echo "</br></br>Los valores que se ordenaron fueron: $valorUno, $valorDos, $valorTres";

?>

</div>


<?php include("footer.php"); ?>
