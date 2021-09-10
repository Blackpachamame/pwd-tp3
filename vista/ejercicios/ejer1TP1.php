<?php
$Titulo = "Ejercicio 1 - TP1";
include_once("../estructura/cabeceraBT.php");
?>

<h2 class="mt-5">Ejercicio 1</h2>
<div class="card mb-5">
    <div class="card-body">
        <h4 class="card-title border-bottom">Consigna</h4>
        <p class="card-text">Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la respuesta, que permita volver a la página anterior.</p>
    </div>
</div>

<form class="row" id="eje1" name="eje1" method="POST" action="../acciones/accion1TP1.php">
    <div class="col-7 col-lg-6 col-xl-4">
        <div class="input-group mb-5">
            <input type="number" class="form-control" name="numero" id="numero" placeholder="Ingrese un número" aria-label="Ingrese un número" aria-describedby="numero" required>
            <button class="btn btn-primary" type="submit" id="numero">Enviar</button>
        </div>
    </div>
</form>

<?php

include_once("../estructura/pieBT.php");
?>