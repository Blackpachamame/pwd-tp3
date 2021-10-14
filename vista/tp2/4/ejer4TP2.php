<?php
$Titulo = "Ejercicio 4 - TP2";
include_once("../../estructura/cabeceraBT.php");
?>

<h2 class="mt-5">Ejercicio 4 - TP2</h2>
<div class="card mb-5">
    <div class="card-body">
        <h4 class="card-title border-bottom">Consigna</h4>
        <p class="card-text">Diseñar un formulario que permita cargar las películas de la empresa Cinem@s. La lista géneros tiene los siguientes datos: Comedia, Drama, Terror, Románticas, Suspenso, Otras.</p>
        <p class="card-text">Aplicar Bootstrap y validar los siguiente:</p>
        <ul class="card-text">
            <li>El año debe ser un campo que debe permitir ingresar como máximo 4 caracteres y solo aceptar números.</li>
            <li>El campo duración debe permitir un máximo de 3 números.</li>
            <li>Todos los datos son obligatorios.</li>
            <li>Al hacer click en el botón “Enviar”, se deberán mostrar todos los datos ingresados en el formulario.</li>
            <li>El botón “Limpiar” debe limpiar el formulario.</li>
        </ul>
    </div>
</div>

<form id="eje4tp2" name="eje4tp2" method="POST" action="accion4TP2.php" data-toggle="validator">
    <div class="row mx-3 justify-content-center justify-content-md-start">
        <!-- Título -->
        <div class="col-md-6 mb-3">
            <label for="firstName">Título</label>
            <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título" required>
            <div class="invalid-feedback">
                Título incorrecto
            </div>
        </div>
        <!-- Actores -->
        <div class="col-md-6 mb-3">
            <label for="actores">Actores</label>
            <input type="text" class="form-control" id="actores" name="actores" placeholder="Actores" required>
            <div class="invalid-feedback">
                Ingrese el nombre de los actores
            </div>
        </div>
        <!-- Director -->
        <div class="col-md-6 mb-3">
            <label for="director">Director</label>
            <input type="text" class="form-control" id="director" name="director" placeholder="Director" required>
            <div class="invalid-feedback">
                Ingrese el nombre del director
            </div>
        </div>
        <!-- Guión -->
        <div class="col-md-6 mb-3">
            <label for="guion">Guión</label>
            <input type="text" class="form-control" id="guion" name="guion" placeholder="Guión" required>
            <div class="invalid-feedback">
                Ingrese el guión de la película
            </div>
        </div>
        <!-- Producción -->
        <div class="col-md-6 mb-3">
            <label for="produccion">Producción</label>
            <input type="text" class="form-control" id="produccion" name="produccion" placeholder="Producción" required>
            <div class="invalid-feedback">
                Ingrese el nombre de la producción
            </div>
        </div>
        <!-- Año -->
        <div class="col-sm-6 col-lg-3 mb-3">
            <label for="year">Año</label>
            <input type="number" class="form-control" id="year" name="year" placeholder="Ej: 1991" min="1900" max="2021" required>
            <div class="invalid-feedback">
                Ingrese el año de la película
            </div>
        </div>
        <!-- Nacionalidad -->
        <div class="col-sm-6 col-lg-3 mb-3">
            <label for="nacion">Nacionalidad</label>
            <input type="text" class="form-control" id="nacion" name="nacion" placeholder="Ej: Japonesa" required>
            <div class="invalid-feedback">
                Ingrese la nacionalidad
            </div>
        </div>
        <!-- Género -->
        <div class="col-sm-6 col-lg-3 mb-3">
            <label for="genero">Género</label>
            <select class="form-select d-block w-100" id="genero" name="genero" required>
                <!--<option disabled>Choose...</option>-->
                <option value="Comedia">Comedia</option>
                <option value="Terror">Terror</option>
                <option value="Acción">Acción</option>
                <option value="Romántica">Romántica</option>
                <option value="Suspenso">Suspenso</option>
            </select>
            <div class="invalid-feedback">
                Seleccione un genero.
            </div>
        </div>
        <!-- Duración -->
        <div class="col-sm-6 col-lg-3 mb-3">
            <label for="minutos">Duración</label>
            <input type="number" class="form-control" id="minutos" name="minutos" placeholder="Ej: 120" aria-describedby="enMin" min="1" max="250" required>
            <div id="enMin" class="form-text">
                Minutos
            </div>
        </div>

    </div>
    <!-- Edad -->
    <div class="row mx-3 mb-3">
        <legend class="col-form-label col-sm-8">Restricciones de edad</legend>
        <div class="col-sm-8 col-md-11">
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="edad" id="edad" value="tp">
                <label class="form-check-label" for="edad">Todo Público</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="edad" id="edad" value="ms">
                <label class="form-check-label" for="edad">Mayores de 7 años</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="edad" id="edad" value="md">
                <label class="form-check-label" for="edad">Mayores de 18 años</label>
            </div>
        </div>
    </div>
    <!-- Sinopsis -->
    <div class="row mx-3 mb-3">
        <div class="col-md-12 mb-4">
            <label for="sinopsis">Sinopsis</label>
            <textarea class="form-control" id="sinopsis" name="sinopsis" placeholder="Ingrese la sinopsis de la película" required></textarea>
            <div class="invalid-feedback">
                Debe ingresarse la sinopsis de la película
            </div>
        </div>
    </div>
    <!-- Botones -->
    <div class="text-center mb-5">
        <input class="btn btn-danger btn-lg" name="btn_eje4_tp2b" type="reset" value="Limpiar"></input>
        <input class="btn btn-primary btn-lg" name="btn_eje4_tp2" type="submit" value="Enviar"></input>
    </div>
</form>

<?php

include_once("../../estructura/pieBT.php");
?>