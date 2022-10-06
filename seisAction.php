<?php include("header.php"); ?>

<div class="container-fluid">

    <a class="btn btn-outline-dark btn-lg" href="menu.php">Regresar al menú</a><br><br>


    <?php
    $valorUno = $_POST["valorUno"];
    $valorDos = $_POST["valorDos"];
    $valorTres = $_POST["valorTres"];
    $valorCuatro = $_POST["valorCuatro"];
    $valorCinco = $_POST["valorCinco"];



    $vectorManual = array($valorUno, $valorDos, $valorTres, $valorCuatro, $valorCinco);
    ?>
    <h3>Array manual:</h3>
    <?php
    print_r($vectorManual);
    ?>
    <br><br>

    <h3>Array aleatorio 1:</h3>
    <?php
    $vectorAle1 = array();

    $vectorAle1 = range(0, 4);
    foreach ($vectorAle1 as &$v) {
        $v = rand(0, 100);
    }
    print_r($vectorAle1);

    ?>
    <br><br>

    <h3>Array aleatorio 2:</h3>
    <?php
    $vectorAle2 = array();

    $vectorAle2 = range(0, 4);
    foreach ($vectorAle2 as &$v) {
        $v = rand(0, 100);
    }
    print_r($vectorAle2);

    ?>
    <br><br>
    <h3>Resultado de la suma de los 3 arrays:</h3>
    
    <?php
    $total = array_sum($vectorManual)+array_sum($vectorAle1)+array_sum($vectorAle2);
    echo ($total);
    ?>

</div>


<?php include("footer.php"); ?>