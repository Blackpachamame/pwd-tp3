<?php
$Titulo = "Ejercicio 1 - TP3";
include_once("../estructura/cabeceraBT.php");
?>

<h2 class="mt-5">Ejercicio 1</h2>
<div class="card mb-5">
    <div class="card-body">
        <h4 class="card-title border-bottom">Consigna</h4>
        <p class="card-text">Crear un formulario HTML que permita subir un archivo. En el servidor se deberá controlar, antes de guardar el archivo, que los tipos validos son .doc o .pdf y además el tamaño máximo permitido es de 2mb. En caso que se cumplan las condiciones mostrar un link al archivo cargado, en caso contrario mostrar un mensaje indicando el problema.</p>
    </div>
</div>

<form id="tp3eje1" name="tp3eje1" method="POST" action="../acciones/accion1TP3.php" data-toggle="validator" enctype="multipart/form-data">
    <div class="row mx-md-3 justify-content-center justify-content-md-start">
        <div class="col col-lg-8 mb-5">
            <label for="archivo" class="form-label">Ejercicio 1 - TP3</label>
            <input class="form-control" type="file" id="archivo" name="archivo" accept=".doc,.docx,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document, application/pdf" required>
            <div id="enMin" class="form-text">
                Archivos DOC o PDF - No superiores a 2 MB
            </div>
        </div>
    </div>
    <!-- Botón enviar -->
    <div class="d-grid gap-2 col-8 col-sm-4 col-md-3 mx-auto mb-5">
        <input id="btn_tp3e1" class="btn btn-primary btn-lg" name="btn_tp3e1" type="submit" value="Enviar">
    </div>
</form>


<?php
include_once("../estructura/pieBT.php");
?>