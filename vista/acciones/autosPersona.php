<?php
$Titulo = "Acción 3 - TP4";
include_once("../estructura/cabeceraBT.php");

$datos = data_submitted();
$objAbmPersona = new AbmPersona();
$dni = $datos['NroDni'];
$persona = $objAbmPersona->buscar($datos);
$arrayautos = $persona[0]->getArrayAutos();
//var_dump($arrayautos);
//var_dump($persona);
/*print_r($dni);
echo "<br>";
print_r($datos);
echo "<br>";
print_r($persona);*/
?>


<div class="row mb-5">

  <?php
  if (count($persona) > 0) {
    echo "<div><div class='alert alert-success d-flex align-items-center mt-5' role='alert'>
            <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
            <div>Esta persona es dueña de los siguientes autos.</div></div></div>";
    $i = 1;
    echo "<div class='table-responsive'>
                <table class='table table-striped'>
                    <thead>
                        <tr>
                        <th scope=''>#</th>
                        <th scope='col'>NroDni</th>
                        <th scope='col'>Patente</th>
                        <th scope='col'>Marca</th>
                        <th scope='col'>Modelo</th>
                        <th scope='col'>Dueño</th>
                        </tr>
                    </thead>
                    <tbody>";
    foreach ($arrayautos as $objAutoPersona) {
      $dniDu = $objAutoPersona->getDuenio();

      if ($dni != "") {
        echo '<tr>';
        echo '<th scope="row">' . $i . '</th>';
        echo '<td>' . $dni . '</td>';
        echo '<td>' . $objAutoPersona->getPatente() . '</td>';
        echo '<td>' . $objAutoPersona->getMarca() . '</td>';
        echo '<td>' . $objAutoPersona->getModelo() . '</td>';
        echo '<td>' . $dniDu . '</td>';
        echo '</tr>';
      }
      $i++;
    }
    echo '</tbody>';
    echo '</table>';
    echo '</div>';
  } else {
    echo "<div><div class='alert alert-danger d-flex align-items-center mt-5' role='alert'>
            <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
            <div>Esta persona no tiene autos.</div></div></div>";
  }
  ?>

  <!-- Botones -->
  <div class="mb-5">
    <a class="btn btn-dark mb-5" href="../ejercicios/listarPersonas.php" role="button"><i class="fas fa-angle-double-left"></i> Regresar</a>
  </div>

</div>

<?php
include_once("../estructura/pieBT.php");
?>