<?php include("header.php"); ?>

<div class="container-fluid">

    <a class="btn btn-outline-dark btn-lg" href="menu.php">Regresar al menú</a><br><br>

    <?php
    $ubi = $_POST["ubi"];
    ?>

    <h3>Vector:</h3>
    <?php
    $vector = array('rojo', 'naranja', 'amarillo', 'verde', 'índigo', 'azul', 'violeta');
    print_r($vector);
    ?>
    <br><br>

    <h3>Ubicación del dato: </h3>
    <?php
    $busqueda = array_search($ubi, $vector);
    echo $busqueda;
    ?>
    <br><br>

    <h3>Dato siguiente: </h3>
    <?php
    echo $vector[$busqueda+1];
    ?>
    <br><br>

    <h3>Dato anterior: </h3>
    <?php
    echo $vector[$busqueda-1];
    ?>
    <br><br>



</div>


<?php include("footer.php"); ?>