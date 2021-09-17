<?php
$Titulo = "Ejercicio 4 - TP1";
include_once("../estructura/cabeceraBT.php");
?>

<h2 class="mt-5">Ejercicio 4</h2>
<div class="card mb-5">
    <div class="card-body">
        <h4 class="card-title border-bottom">Consigna</h4>
        <p class="card-text">Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar esos datos a otra página en donde se muestren mensajes distintos dependiendo si la persona es mayor de edad o no; (si la edad es mayor o igual a 18).
            Enviar los datos usando el método GET y luego probar de modificar los datos directamente en la url para ver los dos posibles mensajes.</p>
    </div>
</div>


<form id="eje4" name="eje4" method="GET" action="../acciones/accion4TP1.php" data-toggle="validator">
    <div class="row mx-3 justify-content-center justify-content-md-start">
        <!-- Nombre -->
        <div class="col-sm-8 col-md-6 mb-3">
            <label for="nombre" class="control-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escriba su nombre completo" required>
            <div class="invalid-feedback">
            </div>
        </div>
        <!-- Apellido -->
        <div class="col-sm-8 col-md-6 mb-3">
            <label for="apellido">Apellido</label>
            <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Escriba su apellido completo" required>
            <div class="invalid-feedback">
            </div>
        </div>
        <!-- Edad -->
        <div class="col-sm-8 col-md-6 col-lg-4 mb-3">
            <label for="edad">Edad</label>
            <input type="number" class="form-control" name="edad" id="edad" placeholder="Coloque su edad" value="" min="1" max="150" required>
        </div>
        <!-- Dirección -->
        <div class="col-sm-8 col-md-12 mb-4">
            <label for="direccion">Dirección</label>
            <textarea class="form-control" name="direccion" id="direccion" placeholder="Escriba su direccion completa" required></textarea>
            <div class="invalid-feedback">Debe ingresar la direccion</div>
        </div>
    </div>
    <!-- Boton Enviar -->
    <div class="d-grid gap-2 col-8 col-sm-4 col-md-3 mx-auto mb-5">
        <input id="btn_eje4" class="btn btn-primary btn-lg" name="btn_eje4" type="submit" value="Enviar">
    </div>
</form>

<?php

include_once("../estructura/pieBT.php");
?>