<?php
$Titulo = "Ejercicio 8 - TP1";
include_once("../estructura/cabeceraBT.php");
?>

<h2 class="mt-5">Ejercicio 8</h2>
<div class="card mb-5">
    <div class="card-body">
        <h4 class="card-title border-bottom">Consigna</h4>
        <p class="card-text">La empresa de Cine Cinem@s tiene establecidas diferentes tarifas para las entradas, en función de la edad y de la condición de estudiante del cliente. Desea que sean los propios clientes los que puedan calcular el valor de sus entradas a través de una página web. Si es estudiante o menor de 12 años el precio es de $160, si es estudiante y mayor o igual de 12 años el precio es de $180, en cualquier otro caso el precio es de $300. Diseñar un formulario que solicite la edad y permita ingresar si se trata de un estudiante o no. Con un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo. Agregar un botón para limpiar el formulario y volver a consultar.</p>
    </div>
</div>

<form id="eje8" name="eje8" method="POST" action="../acciones/accion8TP1.php" data-toggle="validator">
    <!-- Edad -->
    <div class="row">
        <div class="col-4 mb-1">
            <label for="valor2">Ingrese su edad</label>
            <input type="number" class="form-control" id="edad" name="edad" placeholder="20" min="1" max="150" required>
        </div>
    </div>
    <!-- Estudiante -->
    <div class="row">
        <legend class="col-form-label col-sm-8">¿Es estudiante?</legend>
        <div class="col-sm-8 col-md-11">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="estudiante" id="s" value="si" checked>
                <label class="form-check-label" for="s">
                    Si
                </label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="estudiante" id="n" value="no">
                <label class="form-check-label" for="n">
                    No
                </label>
            </div>
        </div>
    </div>
    <!-- Botones -->
    <div class="mt-4 mb-5">
        <input class="btn btn-danger" name="btn_eje8b" type="reset" value="Borrar"></input>
        <input class="btn btn-primary" name="btn_eje8" type="submit" value="Enviar"></input>
    </div>
</form>



<?php

include_once("../estructura/pieBT.php");
?>