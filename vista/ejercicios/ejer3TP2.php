<?php
$Titulo = "Ejercicio 3 - TP2";
include_once("../estructura/cabeceraBT.php");
?>

<h2 class="mt-5">Ejercicio 3 - TP2</h2>
<div class="card mb-5">
    <div class="card-body">
        <h4 class="card-title border-bottom">Consigna</h4>
        <p class="card-text"><strong>a)</strong> Crear una nueva página php con un formulario HTML de login en la que solicitan el usuario
            y la password para loguearse. Los datos del formulario son enviados a un script
            verificaPass.php en el que contienen un arreglo asociativo por cada usuario del sistema. El
            arreglo asociativo tiene como claves: “usuario” y “clave”. El script debe visualizar un mensaje
            de bienvenida si los datos ingresados coinciden con alguno de los almacenados en el arreglo
            y en caso contrario un mensaje de error.</p>
        <p class="card-text"><strong>b)</strong> Realizar la validación de este formulario. Chequear no solo que se hayan cargado el
            usuario y la contraseña antes de ser enviados al servidor sino que también debe
            realizar un control de contraseña segura (La contraseña debe tener como mínimo 8
            caracteres, no puede ser igual que el nombre de usuario ingresado y debe contener
            letras y números).</p>
        <p class="card-text"><strong>c)</strong> Aplicar Bootstrap de manera que la pantalla tenga un aspecto similar al siguiente:</p>
        <div class="text-center">
            <img alt="Ejercicio 3 - TP2" class="mt-2 mb-2" src="../img/ejemplo1.png">
        </div>
    </div>
</div>

<form class="form-signin" action="../acciones/verificaPass.php" method="POST" id="tp2ej3" name="tp2ej3">
    <div class="login mx-auto">
        <h1 class="h3 mb-3 text-center">Member Login</h1>
        <div class="form-group">
            <div class="input-group mt-3">
                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                <input type="text" id="username" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
        </div>
        <div class="form-group">
            <div class="input-group mt-3">
                <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                <input type="password" class="form-control" placeholder="Password" name="password" id="password" aria-label="password" aria-describedby="basic-addon1" required>
            </div>
        </div>
        <div class="d-grid mb-5 mt-3">
            <button class="btn btn-success" type="submit">Login</button>
        </div>
    </div>
</form>

<?php
include_once("../estructura/pieBT.php");
?>