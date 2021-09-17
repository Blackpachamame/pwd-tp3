<?php
$Titulo = "Ejercicio 7 - TP1";
include_once("../estructura/cabeceraBT.php");
?>

<h2 class="mt-5">Ejercicio 7</h2>
<div class="card mb-5">
    <div class="card-body">
        <h4 class="card-title border-bottom">Consigna</h4>
        <p class="card-text">Crear una página con un formulario que contenga dos input de tipo text y un select. En los inputs se ingresarán números y el select debe dar la opción de una operación matemática que podrá resolverse usando los números ingresados. En la página que procesa la información se debe mostrar por pantalla la operación seleccionada, cada uno de los operandos y el resultado obtenido de resolver la operación.</p>
    </div>
</div>

<form id="eje7" name="eje7" method="POST" action="../acciones/accion7TP1.php" data-toggle="validator">
    <div class="row mx-3 mx-lg-0 justify-content-center justify-content-md-start">
        <!-- Valor 1 -->
        <div class="col-sm-5 col-lg-3 mb-3">
            <label for="valor1">Ingrese un valor</label>
            <input type="number" class="form-control" id="valor1" name="valor1" placeholder="Ejemplo: 1" required>
        </div>
        <!-- Valor 2 -->
        <div class="col-sm-5 col-lg-3 mb-3">
            <label for="valor2">Ingrese otro valor</label>
            <input type="number" class="form-control" id="valor2" name="valor2" placeholder="Ejemplo: 2" required>
        </div>
    </div>
    <div class="row mx-3 mx-lg-0 justify-content-center justify-content-md-start">
        <!-- Operación y Enviar -->
        <div class="col-sm-10 col-lg-6">
            <div class="input-group mt-2 mb-5">
                <select class="form-select mr-sm-2" id="op" name="op" required>
                    <option selected disabled value="">Selecciones una operación</option>
                    <option value="suma">Suma</option>
                    <option value="resta">Resta</option>
                    <option value="multiplicacion">Multiplicacion</option>
                </select>
                <input id="btn_eje7" class="btn btn-primary" name="btn_eje7" type="submit" value="Enviar">
            </div>
        </div>
    </div>
</form>

<?php

include_once("../estructura/pieBT.php");
?>