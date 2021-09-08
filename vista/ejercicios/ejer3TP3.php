<?php
$Titulo = "Ejercicio 3 - TP3";
include_once("../estructura/cabeceraBT.php");
?>

<h2 class="mt-5">Ejercicio 3</h2>
<div class="card mb-5">
    <div class="card-body">
        <h4 class="card-title border-bottom">Consigna</h4>
        <p class="card-text">Agregue al formulario creado en el ejercicio 4 del trabajo práctico 2 un input file que les permita adjuntar la imagen de película que se está cargando. Cuando se envía el formulario se deberá guardar la imagen y luego mostrarla junto con la información cargada en el formulario.</p>
    </div>
</div>

<form id="tp3eje3" name="tp3eje3" method="POST" action="../acciones/accion3TP3.php" data-toggle="validator" enctype="multipart/form-data">
    <div class="row mx-md-3 justify-content-center justify-content-md-start">
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
                <option value="Acción">Accion</option>
                <option value="Romántica">Romantica</option>
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
    <div class="row mx-md-3 justify-content-center justify-content-sm-start mb-3">
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
    <div class="row mx-md-3 justify-content-center justify-content-sm-start mb-3">
        <div class="col-md-12">
            <label for=" sinopsis">Sinopsis</label>
            <textarea class="form-control" id="sinopsis" name="sinopsis" placeholder="Ingrese la sinopsis de la película" required></textarea>
            <div class="invalid-feedback">
                Debe ingresarse la sinopsis de la película
            </div>
        </div>
    </div>
    <!-- Portada -->
    <div class="row mx-md-3 justify-content-center justify-content-sm-start mb-3">
        <div class="col col-lg-8">
            <label for="imagen" class="form-label">Portada de la película</label>
            <input class="form-control" type="file" id="imagen" name="imagen" accept="image/*" required>
            <div id="enMin" class="form-text">
                Solo se permiten imágenes
            </div>
        </div>
    </div>
    <!-- Botón enviar -->
    <div class="d-grid gap-2 col-8 col-sm-4 col-md-3 mx-auto mb-5">
        <input id="btn_tp3e3" class="btn btn-primary btn-lg" name="btn_tp3e3" type="submit" value="Enviar">
    </div>
</form>


<!--<form id="tp3eje1" name="tp3eje1" method="POST" action="../acciones/accion1TP3.php" enctype="multipart/form-data">

     <div class="row mb-3">
        <div class="col-sm-12 ">
            <div class="form-group has-feedback">
                <label for="imagen" class="control-label">Imagen:</label>
                <div class="input-group">
                    <input type="file" class="form-control" id="imagen" name="imagen" accept="image/*" required>
                </div>
                <small class="text-muted">Imagenes GIF, PNG o JPEG - No superiores a 300 KB</small>
                <span class="form-control-feedback" aria-hidden="true"></span>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-12 ">
            <div class="form-group has-feedback">
                <label for="texto" class="control-label">Archivo Texto:</label>
                <div class="input-group">
                    <input type="file" class="form-control" id="texto" name="texto">
                </div>
                <small class="text-muted">Archivo PDF - No superiores a 400 KB</small>
                <span class="form-control-feedback" aria-hidden="true"></span>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-sm-12 ">
            <div class="form-group has-feedback">
                <label for="observaciones" class="control-label">Observaciones:</label>
                <div class="input-group">
                    <textarea type="text" class="form-control" id="observaciones" name="observaciones" required></textarea>
                </div>
                <span class="form-control-feedback" aria-hidden="true"></span>
            </div>
        </div>
    </div> 

    <div class="row">
        <div class="col-md-12">
            <input id="btn_tp3e1" class="btn btn-primary btn-block" name="btn_tp3e1" type="submit" value="Enviar">
        </div>
    </div>
</form>-->


<?php
include_once("../estructura/pieBT.php");
?>