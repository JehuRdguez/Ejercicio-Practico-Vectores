<?php include("header.php"); ?>


<center>
<a class="btn btn-outline-dark btn-lg" href="uno.php">1. Definir tamaño del vector</a><br><br>

<a class="btn btn-outline-dark btn-lg" href="dos.php">2. Rellenar vector</a><br><br>

<a class="btn btn-outline-dark btn-lg" href="tres.php">3. Ordenar vector de mayor a menor</a><br><br>

<a class="btn btn-outline-dark btn-lg" href="cuatro.php">4. Buscar la ubicación y el dato más cercano a un dato seleccionado por el usuario</a><br><br>

<a class="btn btn-outline-dark btn-lg" href="cinco.php">5. Generar vectores con números aleatorios</a><br><br>

<a class="btn btn-outline-dark btn-lg" href="seis.php">6. Suma de vectores</a><br><br>

<a class="btn btn-outline-dark btn-lg" href="siete.php">7. Resta de vectores</a><br><br>

<a class="btn btn-outline-dark btn-lg" href="ocho.php">8. Imprimir vectores</a><br><br>

<a class="btn btn-outline-dark btn-lg" onclick="alerta()">9. Salir</a><br><br>
</center>


<!--ALERTA DEL PROBLEMA NUEVE-->
<script type="text/javascript">
    function alerta() {
        var mensaje;
        var opcion = confirm("¿Desea salir del menú?");
        if (opcion == true) {
            window.location.href="index.php"
        } else {
            return false;
        }
    }
</script>


<?php include("footer.php"); ?>