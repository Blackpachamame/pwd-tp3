<?php

$Titulo = "Acción 2 - TP4";
include_once("../estructura/cabeceraBT.php");

$datos = data_submitted();
$objAbmAuto = new AbmAuto();
$unAuto = $objAbmAuto->buscar($datos);

?>

<div class="row mb-5">

    <?php
    if (count($unAuto) > 0) {
        echo "<div><div class='alert alert-success mt-5' role='alert'>¡Auto encontrado!</div></div>";
        $i = 1;
        echo "<div class='table-responsive'>
                <table class='table table-striped'>
                    <thead>
                        <tr>
                            <th scope=''>#</th>
                            <th scope='col'>Patente</th>
                            <th scope='col'>Marca</th>
                            <th scope='col'>Modelo</th>
                            <th scope='col'>Dueño</th>
                        </tr>
                    </thead>
                    <tbody>";
        foreach ($unAuto as $autoEncontrado) {
            $dniDu = $autoEncontrado->getDniDuenio();
            echo '<tr>';
            echo '<th scope="row">' . $i . '</th>';
            echo '<td>' . $autoEncontrado->getPatente() . '</td>';
            echo '<td>' . $autoEncontrado->getMarca() . '</td>';
            echo '<td>' . $autoEncontrado->getModelo() . '</td>';
            echo '<td>' . $dniDu . '</td>';
            echo '</tr>';
            $i++;
        }
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
    } else {
        echo "<div><div class='alert alert-danger mt-5' role='alert'>No se encontro ningún auto con la patente ingresada.</div></div>";
    }

    ?>

    <!-- Botones -->
    <div class="mb-5">
        <a class="btn btn-dark mb-5" href="../ejercicios/buscarAuto.php" role="button"><i class="fas fa-angle-double-left"></i> Regresar</a>
    </div>

</div>

<?php
include_once("../estructura/pieBT.php");
?>