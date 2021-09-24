<?php
$Titulo = "Ejercicio 3 - TP4";
include_once("../estructura/cabeceraBT.php");

/* Crear una página "listaPersonas.php" que muestre un listado con las personas que se
encuentran cargadas y un link a otra página “autosPersona.php” que recibe un dni de una persona y muestra
los datos de la persona y un listado de los autos que tiene asociados. Recordar usar la capa de control antes
generada, no se puede acceder directamente a las clases del ORM.*/

$objAbmTabla = new AbmPersona();
$listaTabla = $objAbmTabla->buscar(null);

?>

<h2 class="mt-5">Listar Personas</h2>
<div class="card mb-5">
  <div class="card-body">
    <h4 class="card-title border-bottom">Consigna</h4>
    <p class="card-text">Crear una página "listaPersonas.php" que muestre un listado con las personas que se encuentran cargadas y un link a otra página “autosPersona.php” que recibe un dni de una persona y muestra los datos de la persona y un listado de los autos que tiene asociados. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.</p>
  </div>
</div>


<div class="row mb-5" id="tp4_eje3">
  <form id="DniDuenio" name="autosPersona" action="../acciones/autosPersona.php" method="post">
    <div class="table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="">#</th>
            <th scope="col">NroDni</th>
            <th scope="col">Apellido</th>
            <th scope="col">Nombre</th>
            <th scope="col">FechaNac</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Domicilio</th>
            <th scope="col" class="text-center">Autos</th>
          </tr>
        </thead>
        <?php

        if (count($listaTabla) > 0) {
          $i = 1;
          echo '<tbody>';
          foreach ($listaTabla as $objTabla) {
            echo '<tr>';
            echo '<th scope="row">' . $i . '</th>';
            echo '<td>' . $objTabla->getNroDni() .    '</td>';
            echo '<td>' . $objTabla->getApellido() .  '</td>';
            echo '<td>' . $objTabla->getNombre() .    '</td>';
            echo '<td>' . $objTabla->getfechaNac() .  '</td>';
            echo '<td>' . $objTabla->getTelefono() .  '</td>';
            echo '<td>' . $objTabla->getDomicilio() . '</td>';
            //echo '<input type="hidden" id="DniDuenio" name="DniDuenio" value="' . $objTabla->getNroDni() . '" />';
            echo '<td class="text-center"> <input type="submit" id="DniDuenio" name="DniDuenio" value="' . $objTabla->getNroDni() . '" /></td>';
            echo '</tr>';
            $i++;
          }
          echo '</tbody>';
          echo '</table>';
        }

        ?>

    </div>

  </form>

  <!-- <form name="form" method="post" action="../acciones/autosPersona.php">
    Ingrese DNI para visualizar autos propios.
    <input type="number" id="dni" name="dni" min="" maxlenght="8" value="ver autos de: ">
    <input type="submit">
  </form> -->
</div>

<?php
include_once("../estructura/pieBT.php");
?>