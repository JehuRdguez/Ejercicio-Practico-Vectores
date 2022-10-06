<?php include("header.php"); ?>

<div class="container-fluid">

    <a class="btn btn-outline-dark btn-lg" href="menu.php">Regresar al menú</a><br><br>


    <h3>Array aleatorio 1:</h3>
    <?php
    $vector = array();

    $vector = range(0, 9);
    foreach ($vector as &$v) {
        $v = rand(0, 100);
    }
    print_r($vector);

    ?>
    <br><br>

    <h3>Array aleatorio 2:</h3>
    <?php
    $vector = array();

    $vector = range(0, 9);
    foreach ($vector as &$v) {
        $v = rand(0, 100);
    }
    print_r($vector);

    ?>
</div>


<?php include("footer.php"); ?>