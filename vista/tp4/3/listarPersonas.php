<?php
$Titulo = "Ejercicio 3 - TP4";
include_once("../../estructura/cabeceraBT.php");

$objAbmTabla = new AbmPersona();
$listaTabla = $objAbmTabla->buscar(null);
?>

<h2 class="mt-5">Listar Personas</h2>
<div class="card mb-4">
  <div class="card-body">
    <h4 class="card-title border-bottom">Consigna</h4>
    <p class="card-text">Crear una página "listaPersonas.php" que muestre un listado con las personas que se encuentran cargadas y un link a otra página “autosPersona.php” que recibe un dni de una persona y muestra los datos de la persona y un listado de los autos que tiene asociados. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.</p>
  </div>
</div>


<div class="row mb-5" id="tp4_eje3">
  <!-- Boton Agregar Persona -->
  <div class="mb-2 d-flex justify-content-end">
    <a class="btn btn-primary" href="../4/nuevaPersona.php" role="button"><i class="fas fa-plus"></i> Nueva Persona</a>
  </div>
  <form id="Duenio" name="autosPersona" action="autosPersona.php" method="post">
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
          foreach ($listaTabla as $objPersona) {
            $dni = $objPersona->getNroDni();
            // var_dump($objPersona);
            echo '<tr class="align-middle">';
            echo '<th scope="row">' . $i . '</th>';
            echo '<td>' . $objPersona->getNroDni() .    '</td>';
            echo '<td>' . $objPersona->getApellido() .  '</td>';
            echo '<td>' . $objPersona->getNombre() .    '</td>';
            echo '<td>' . $objPersona->getfechaNac() .  '</td>';
            echo '<td>' . $objPersona->getTelefono() .  '</td>';
            echo '<td>' . $objPersona->getDomicilio() . '</td>';
            echo "<td class='text-center'>
                <button class='btn btn-warning btn-sm' id='NroDni' name='NroDni' value='" . $dni . "' type='submit'>
                <i class='fas fa-eye'></i></button></td>";
            //echo '<td class="text-center"> <input type="submit" id="Duenio" name="Duenio" value="' . $dni . '"></td>';
            echo '</tr>';
            $i++;
          }
          echo '</tbody>';
          echo '</table>';
        }

        ?>

    </div>

  </form>
</div>

<?php
include_once("../../estructura/pieBT.php");
?>