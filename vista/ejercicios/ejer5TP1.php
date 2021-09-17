<?php
$Titulo = "Ejercicio 5 - TP1";
include_once("../estructura/cabeceraBT.php");
?>

<h2 class="mt-5">Ejercicio 5</h2>
<div class="card mb-5">
    <div class="card-body">
        <h4 class="card-title border-bottom">Consigna</h4>
        <p class="card-text">Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-estudios primarios, 3-estudios secundarios. Agregar el componente que crea más apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además un mensaje que indique el tipo de estudios que posee y su sexo.</p>
    </div>
</div>

<form id="eje5" name="eje5" method="POST" action="../acciones/accion5TP1.php" data-toggle="validator">
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
        <div class="col-sm-8 col-md-12 mb-3">
            <label for="direccion">Dirección</label>
            <textarea class="form-control" name="direccion" id="direccion" placeholder="Escriba su direccion completa" required></textarea>
        </div>
    </div>
    <!-- Nivel de estudio -->
    <div class="row mx-3 justify-content-center justify-content-md-start">
        <legend class="col-form-label col-sm-8">Nivel de estudio</legend>
        <div class="col-sm-8 col-md-11">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="estudio" id="sin" value="sin">
                <label class="form-check-label" for="sin">Sin estudios</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="estudio" id="primario" value="primario">
                <label class="form-check-label" for="primario">Primario</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="estudio" id="secundario" value="secundario">
                <label class="form-check-label" for="secundario">Secundario</label>
            </div>
        </div>
    </div>
    <!-- Sexo -->
    <div class="row mx-3 justify-content-center justify-content-md-start mt-2 mb-4">
        <legend class="col-form-label col-sm-8">Sexo</legend>
        <div class="col-sm-8 col-md-11">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" id="f" value="f">
                <label class="form-check-label" for="f">Femenino</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" id="m" value="m">
                <label class="form-check-label" for="m">Masculino</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="sexo" id="o" value="o">
                <label class="form-check-label" for="o">Otra</label>
            </div>
        </div>
    </div>
    <!-- Botón enviar -->
    <div class="d-grid gap-2 col-8 col-sm-4 col-md-3 mx-auto mb-5">
        <input id="btn_eje5" class="btn btn-primary btn-lg" name="btn_eje5" type="submit" value="Enviar">
    </div>
</form>

<?php

include_once("../estructura/pieBT.php");
?>