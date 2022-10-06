<?php include("header.php"); ?>


<center>
    <a class="btn btn-outline-dark btn-lg" data-bs-toggle="modal" data-bs-target="#cuatro">4. Buscar la ubicación y el dato más cercano a un dato seleccionado por el usuario</a><br><br>
</center>


<!--MODAL PROBLEMA UNO-->
<div class="modal fade" id="cuatro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">4. Buscar la ubicación y el dato más cercano a un dato seleccionado por el usuario</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="cuatroAction.php" method="post">
                        <div class="row">

                            <center>
                                <div class="form-group">
                                    <label>Colores: rojo, naranja, amarillo, verde, índigo, azul y violeta.</label>
                                    <br><br>
                                    <label>Ingrese alguno de los siguientes colores anteriores para conocer su ubicación y datos cercanos: </label><br>
                                    <input type="text" class="form-control" name="ubi" id="ubi">
                                </div>
                            </center>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-dark">Aceptar</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include("footer.php"); ?>