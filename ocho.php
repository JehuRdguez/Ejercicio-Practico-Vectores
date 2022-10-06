<?php include("header.php"); ?>


<center>
<a class="btn btn-outline-dark btn-lg" data-bs-toggle="modal" data-bs-target="#ocho">8. Imprimir vectores</a><br><br>
</center>


<!--MODAL PROBLEMA UNO-->
<div class="modal fade" id="ocho" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">8. Imprimir vectores</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="ochoAction.php" method="post">
                        <div class="row">


                        <center>
                                <div class="form-group">
                                    <label>Rellena los 5 datos del vector que se va a imprimir junto a otro de manera aleatoria: </label><br><br>
                                    <label>Valor uno:</label><br>
                                    <input type="number" class="form-control" name="valorUno" id="valorUno">
                                    <label>Valor dos:</label><br>
                                    <input type="number" class="form-control" name="valorDos" id="valorDos">
                                    <label>Valor tres:</label><br>
                                    <input type="number" class="form-control" name="valorTres" id="valorTres">
                                    <label>Valor cuatro:</label><br>
                                    <input type="number" class="form-control" name="valorCuatro" id="valorCuatro">
                                    <label>Valor cinco:</label><br>
                                    <input type="number" class="form-control" name="valorCinco" id="valorCinco">

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