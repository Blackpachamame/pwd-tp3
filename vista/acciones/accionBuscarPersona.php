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
            echo "<div><div class='alert alert-success mt-5' role='alert'>¡Persona encontrada!</div></div>";
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
                            <th scope='col'>Dni</th>
                        </tr>
                    </thead>
                    <tbody>";
            foreach ($unaPersona as $personaEncontrado) {
                $dniDu = $personaEncontrado->getNroDni();
                echo '<tr>';
                echo '<th scope="row">' . $i . '</th>';
                echo '<td><input id="Apellido" name="Apellido"  type= "text" value=' . $personaEncontrado->getApellido() . '>' . '</td>';
                echo '<td><input type= "text" id="Nombre" name="Nombre" value=' . $personaEncontrado->getNombre() . '>' . '</td>';
                echo '<td><input type= "text" id="fechaNac" name="fechaNac" value=' . $personaEncontrado->getfechaNac() . '>' . '</td>';
                echo '<td><input type= "text" id="Telefono" name="Telefono" value=' . $personaEncontrado->getTelefono() . '>' . '</td>';
                echo '<td><input type= "text" id="Domicilio" name="Domicilio" value=' . $personaEncontrado->getDomicilio() . '>' . '</td>';
                // echo '<td>' . $personaEncontrado->getNombre() . '</td>';
                // echo '<td>' . $personaEncontrado->getfechaNac() . '</td>';
                // echo '<td>' . $personaEncontrado->getTelefono() . '</td>';
                // echo '<td>' . $personaEncontrado->getDomicilio() . '</td>';
                echo '<td>' . $dniDu . '</td>';
                echo '<td><input id="NroDni" name="NroDni"  type="hidden" value="' . $dniDu . '">' . '</td>';
                //echo "<input id='accion' name='accion' value='editar' class='btn btn-primary' type='submit'>";
                echo "<td class='text-center'><input id='accion' name='accion' value='editar' type='submit'><button type='button' class='btn btn-success btn-sm'><i class='fas fa-pen'></i></button></input></td>";
                echo '</tr>';
                $i++;
            }
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
        } else {
            echo "<div><div class='alert alert-danger mt-5' role='alert'>No se encontro ninguna persona con ese dni.</div></div>";
        }

        ?>

        <!-- Botones -->
        <div class="my-5">
            <a class="btn btn-dark" href="../ejercicios/buscarPersona.php" role="button"><i class="fas fa-angle-double-left"></i> Regresar</a>
            <!-- <a class='btn btn-primary' type='submit' id='accion' name='accion' value='editar'>Editar <i class="fas fa-angle-double-right"></i></a>-->
        </div>
    </form>
</div>

<?php
include_once("../estructura/pieBT.php");
?>