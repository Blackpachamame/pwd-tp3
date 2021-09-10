<?php
$Titulo = "Ejercicio 2 - TP1";
include_once("../estructura/cabeceraBT.php");
?>

<h2 class="mt-5">Ejercicio 2</h2>
<div class="card mb-5">
    <div class="card-body">
        <h4 class="card-title border-bottom">Consigna</h4>
        <p class="card-text">Crear una página php que contenga un formulario HTML que permita ingresar las horas de cursada, de la materia Programación Web Dinámica, por cada día de la semana. Enviar los datos del formulario por el método Get a otra página php que los reciba y complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que se cursan por semana.</p>
    </div>
</div>

<form id="eje2" name="eje2" method="POST" action="../acciones/accion2TP1.php" data-toggle="validator">
    <div class="row">
        <div class="col mb-2">
            <label for="arregloHoras0">Lunes </label>
            <input type="number" class="form-control" id="arregloHoras0" name="arregloHoras0" placeholder="Horas" value="" min="0" max="10" required>
        </div>
        <div class="col mb-2">
            <label for="arregloHoras1">Martes </label>
            <input type="number" class="form-control" id="arregloHoras1" name="arregloHoras1" placeholder="Horas" value="" min="0" max="10" required>
        </div>
        <div class="col mb-2">
            <label for="arregloHoras2">Miércoles </label>
            <input type="number" class="form-control" id="arregloHoras2" name="arregloHoras2" placeholder="Horas" value="" min="0" max="10" required>
        </div>
        <div class="col mb-2">
            <label for="arregloHoras3">Jueves </label>
            <input type="number" class="form-control" id="arregloHoras3" name="arregloHoras3" placeholder="Horas" value="" min="0" max="10" required>
        </div>
        <div class="col mb-5">
            <label for="arregloHoras4">Viernes </label>
            <input type="number" class="form-control" id="arregloHoras4" name="arregloHoras4" placeholder="Horas" value="" min="0" max="10" required>
        </div>
    </div>
    <div class="d-grid gap-2 col-8 col-sm-4 col-md-3 mx-auto mb-5">
        <input id="btn_eje2" class="btn btn-primary btn-lg" name="btn_eje2" type="submit" value="Enviar">
    </div>
</form>

<?php

include_once("../estructura/pieBT.php");
?>