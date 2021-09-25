<?php
$Titulo = "Acción 7 - TP4";
include_once("../estructura/cabeceraBT.php");

$datos = data_submitted();
$objAbmPersona = new AbmPersona();
$unaPersona = $objAbmPersona->buscar($datos);

?>

<div class="row mb-5">
    <form id=accion method="POST" action="../acciones/abmPersona.php">

        <?php
        if (count($unaPersona) > 0) {
            echo "<div class='alert alert-success d-flex align-items-center mt-5' role='alert'>
            <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
            <div>¡Persona encontrada!</div></div>";
            $i = 1;
            echo "<div class='table-responsive'>
                <table class='table table-striped'>
                    <thead>
                        <tr class='align-middle'>
                            <th scope=''>#</th>
                            <th scope='col'>Apellido</th>
                            <th scope='col'>Nombre</th>
                            <th scope='col'>Fecha nacimiento</th>
                            <th scope='col'>Teléfono</th>
                            <th scope='col'>Domicilio</th>
                            <th scope='col'>Dni</th>
                            <th class='d-none' scope='col'>#</th>                      
                            <th scope='col'>Editar</th>
                        </tr>
                    </thead>
                    <tbody>";
            foreach ($unaPersona as $personaEncontrado) {
                $dniDu = $personaEncontrado->getNroDni();
                $apellido = $personaEncontrado->getApellido();
                $nombre = $personaEncontrado->getNombre();
                $fecha = $personaEncontrado->getfechaNac();
                $tel = $personaEncontrado->getTelefono();
                $domi = $personaEncontrado->getDomicilio();

                echo '<tr class="align-middle">';
                echo '<th scope="row">' . $i . '</th>';
                echo '<td><input class="w-100" type="text" id="Apellido" name="Apellido" value="' . $apellido . '">' . '</td>';
                echo '<td><input class="w-100" type="text" id="Nombre" name="Nombre" value="' . $nombre . '">' . '</td>';
                echo '<td><input class="w-100" type="text" id="fechaNac" name="fechaNac" value="' . $fecha . '">' . '</td>';
                echo '<td><input class="w-100" type="text" id="Telefono" name="Telefono" value="' . $tel . '">' . '</td>';
                echo '<td><input class="w-100" type="text" id="Domicilio" name="Domicilio" value="' . $domi . '">' . '</td>';
                echo '<td>' . $dniDu . '</td>';
                echo '<td class="d-none"><input id="NroDni" name="NroDni" type="hidden" value="' . $dniDu . '">' . '</td>';
                //<input id='accion' name='accion' value='editar' type='submit'>
                echo "<td class='text-center'>
                <button class='btn btn-success btn-sm' id='accion' name='accion' value='editar' type='submit'>
                <i class='fas fa-pen'></i></button></td>";
                echo '</tr>';
                $i++;
            }
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
        } else {
            echo "<div class='alert alert-danger d-flex align-items-center mt-5' role='alert'>
            <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
            <div>No se encontro ninguna persona con ese dni.</div></div>";
        }

        ?>

        <!-- Botones -->
        <div class="mb-5">
            <a class="btn btn-dark" href="../ejercicios/buscarPersona.php" role="button"><i class="fas fa-angle-double-left"></i> Regresar</a>
        </div>
    </form>
</div>

<?php
include_once("../estructura/pieBT.php");
?>