<?php
$Titulo = "Ejercicio 2 - TP3";
include_once("../estructura/cabeceraBT.php");
?>


<h2 class="mt-5">Ejercicio 2</h2>
<div class="card mb-5">
    <div class="card-body">
        <h4 class="card-title border-bottom">Consigna</h4>
        <p class="card-text">Crear un formulario que permita subir un archivo. En el servidor se deberá controlar que el tipo esperado sea txt (texto plano), si es correcto deberá abrir el archivo y mostrar su contenido en un textarea.</p>
    </div>
</div>

<form id="tp3eje2" name="tp3eje2" method="POST" action="../acciones/accion2TP3.php" data-toggle="validator" enctype="multipart/form-data">
    <div class="row mx-md-3 justify-content-center justify-content-md-start">
        <div class="col col-lg-8 mb-5">
            <label for="texto" class="form-label">Ejercicio 2 - TP3</label>
            <input class="form-control" type="file" id="texto" name="texto" accept=".txt" required>
            <div id="enMin" class="form-text">
                Archivos TXT
            </div>
        </div>
    </div>
    <!-- Botón enviar -->
    <div class="d-grid gap-2 col-8 col-sm-4 col-md-3 mx-auto mb-5">
        <input id="btn_tp3e2" class="btn btn-primary btn-lg" name="btn_tp3e2" type="submit" value="Enviar">
    </div>
</form>


<?php
include_once("../estructura/pieBT.php");
?>