<?php include("header.php"); ?>


<center>
<a class="btn btn-outline-dark btn-lg" data-bs-toggle="modal" data-bs-target="#uno">1. Definir tamaño del vector</a><br><br>
</center>


<!--MODAL PROBLEMA UNO-->
<div class="modal fade" id="uno" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">1. Definir tamaño del vector</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="unoAction.php" method="post">
                        <div class="row">

                            <center>
                                <div class="form-group">
                                    <label>¿De que tamaño será el vector?</label><br>
                                    <input type="number" class="form-control" name="tamano" id="tamano">
                                </div>
                            </center>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-dark" >Aceptar</button>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include("footer.php"); ?>