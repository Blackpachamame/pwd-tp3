<?php

$Titulo = "Acción 2 - TP4";
include_once("../estructura/cabeceraBT.php");

$datos = data_submitted();
$objAbmPersona = new AbmPersona();
$unaPersona = $objAbmPersona->buscar($datos);

?>

<div class="row mb-5">

    <?php
    if (count($unaPersona) > 0) {
        echo "<div><div class='alert alert-success mt-5' role='alert'>¡Auto encontrado!</div></div>";
        $i = 1;
        echo "<div class='table-responsive'>
                <table class='table table-striped'>
                    <thead>
                        <tr>
                            <th scope=''>#</th>
                            <th scope='col'>Apellido</th>
                            <th scope='col'>Nombre</th>
                            <th scope='col'>Fecha nacimiento</th>
                            <th scope='col'>Telefono</th>
                            <th scope='col'>Domicilio</th>
                        </tr>
                    </thead>
                    <tbody>";
        foreach ($unaPersona as $personaEncontrado) {
            $dniDu = $personaEncontrado->getNroDni();
            echo '<tr>';
            echo '<th scope="row">' . $i . '</th>';
            echo '<td>' . $personaEncontrado->getApellido() . '</td>';
            // echo '<td><input type= "text" value='.$personaEncontrado->getNombre().'>'.'</td>';
            // echo '<td><input type= "text" value='.$personaEncontrado->getfechaNac().'>'.'</td>';
            // echo '<td><input type= "text" value='.$personaEncontrado->getTelefono().'>'.'</td>';
            // echo '<td><input type= "text" value='.$personaEncontrado->getDomicilio().'>'.'</td>';
            
            echo '<td>' . $personaEncontrado->getNombre() . '</td>';
            echo '<td>' . $personaEncontrado->getfechaNac() . '</td>';
            echo '<td>' . $personaEncontrado->getTelefono() . '</td>';
            echo '<td>' . $personaEncontrado->getDomicilio() . '</td>';
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
        <a class="btn btn-dark mb-5" href="../ejercicios/BuscarPersona.php" role="button"><i class="fas fa-angle-double-left"></i> Regresar</a>
    </div>

</div>

<?php
include_once("../estructura/pieBT.php");
?>