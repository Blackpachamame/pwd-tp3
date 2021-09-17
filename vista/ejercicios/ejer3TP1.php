<?php
$Titulo = "Ejercicio 3 - TP1";
include_once("../estructura/cabeceraBT.php");
?>

<h2 class="mt-5">Ejercicio 3</h2>
<div class="card mb-5">
    <div class="card-body">
        <h4 class="card-title border-bottom">Consigna</h4>
        <p class="card-text">Crear una página php que contenga un formulario HTML como el que se indica en la imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
            Cambiar el método Post por Get y analizar las diferencias.</p>
    </div>
</div>

<form id="eje3" name="eje3" method="POST" action="../acciones/accion3TP1.php">
    <div class="row mx-3 justify-content-center justify-content-md-start">
        <!-- Nombre -->
        <div class="col-sm-8 col-md-6 mb-3">
            <label for="nombre" class="control-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Escriba su nombre completo" required>
        </div>
        <!-- Apellido -->
        <div class="col-sm-8 col-md-6 mb-3">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Escriba su apellido completo" required>
        </div>
        <!-- Edad -->
        <div class="col-sm-8 col-md-6 col-lg-4 mb-3">
            <label for="edad">Edad</label>
            <input type="number" class="form-control" name="edad" id="edad" placeholder="Coloque su edad" value="" min="1" max="150" required>
        </div>
        <!-- Dirección -->
        <div class="col-sm-8 col-md-12 mb-4">
            <label for="direccion">Dirección</label>
            <textarea class="form-control text-wrap" name="direccion" id="direccion" placeholder="Escriba su direccion completa" required></textarea>
        </div>
    </div>
    <!-- Boton Enviar -->
    <div class="d-grid gap-2 col-8 col-sm-4 col-md-3 mx-auto mb-5">
        <input id="btn_eje3" class="btn btn-primary btn-lg" name="btn_eje3" type="submit" value="Enviar">
    </div>
</form>

<?php

include_once("../estructura/pieBT.php");
?>