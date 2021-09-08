<?php
$Titulo = "Ejercicio 4 - TP2";
include_once("../estructura/cabeceraBT.php");
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
            <li>El botón “Borrar” debe limpiar el formulario.</li>
        </ul>
    </div>
</div>

<!-- Carrousel marcos -->
<div class="row mx-3 justify-content-center justify-content-md-start mb-5">
    <div class="col">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../../uploads/c1.jpg" class="d-block w-100" alt="9reinas" />
                </div>
                <div class="carousel-item">
                    <img src="../../uploads/c1.jpg" class="d-block w-100" alt="9reinas" />
                </div>
                <div class="carousel-item">
                    <img src="../../uploads/c1.jpg" class="d-block w-100" alt="9reinas" />
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>
<!-- Carrousel marcos -->

<?php

include_once("../estructura/pieBT.php");
?>