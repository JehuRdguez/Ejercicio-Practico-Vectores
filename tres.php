<?php include("header.php"); ?>


<center>
<a class="btn btn-outline-dark btn-lg" data-bs-toggle="modal" data-bs-target="#tres">3. Ordenar vector de mayor a menor</a><br><br>
</center>


<!--MODAL PROBLEMA UNO-->
<div class="modal fade" id="tres" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">3. Ordenar vector de mayor a menor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="tresAction.php" method="post">
                        <div class="row">


                        <center>
                                <div class="form-group">
                                    <label>Rellena los 3 datos que se van a ordenar de mayor a menor:</label><br><br>
                                    <label>Valor uno:</label><br>
                                    <input type="number" class="form-control" name="valorUno" id="valorUno">
                                    <label>Valor dos:</label><br>
                                    <input type="number" class="form-control" name="valorDos" id="valorDos">
                                    <label>Valor tres:</label><br>
                                    <input type="number" class="form-control" name="valorTres" id="valorTres">

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