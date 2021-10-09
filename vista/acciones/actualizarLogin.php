<?php
$Titulo = "Acción 4.1 - TP5";
include_once("../estructura/cabeceraBT.php");

$datos = data_submitted();
$objAbmUsuario = new AbmUsuario();
$filtro = array();
$filtro['idusuario'] = $datos['userEdit'];
$unUsuario = $objAbmUsuario->buscar($filtro);
?>

<div class="row mb-5">
    <form id=accion method="POST" action="../acciones/abmUsuario.php">

        <?php
        /*if (count($unUsuario) > 0) {
            echo "<div class='alert alert-success d-flex align-items-center mt-5' role='alert'>
            <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Success:'><use xlink:href='#check-circle-fill'/></svg>
            <div>¡Usuario encontrado!</div></div>";
            $i = 1;*/
        echo "<div class='table-responsive'>
            <table class='table table-striped'>
                <thead>
                    <tr class='align-middle'>
                        <th scope='col'>Nombre</th>
                        <th scope='col'>Mail</th>
                        <th class='d-none' scope='col'>#</th>      
                        <th class='d-none' scope='col'>#</th> 
                        <th class='d-none' scope='col'>#</th>                 
                        <th class='text-center' scope='col'>Editar</th>
                    </tr>
                </thead>
                <tbody>";
        foreach ($unUsuario as $usuarioEncontrado) {
            $nombre = $usuarioEncontrado->getusnombre();
            $mail = $usuarioEncontrado->getusmail();
            $uspass = $usuarioEncontrado->getuspass();
            $usdeshabilitado = $usuarioEncontrado->getusdeshabilitado();
            $id = $usuarioEncontrado->getidusuario();

            echo '<tr class="align-middle">';
            echo '<td><input class="w-100" type="text" id="usnombre" name="usnombre" value="' . $nombre . '">' . '</td>';
            echo '<td><input class="w-100" type="text" id="usmail" name="usmail" value="' . $mail . '">' . '</td>';
            echo '<td class="d-none"><input id="uspass" name="uspass" type="hidden" value="' . $uspass . '">' . '</td>';
            echo '<td class="d-none"><input id="usdeshabilitado" name="usdeshabilitado" type="hidden" value="' . $usdeshabilitado . '">' . '</td>';
            echo '<td class="d-none"><input id="idusuario" name="idusuario" type="hidden" value="' . $id . '">' . '</td>';
            echo "<td class='text-center'>
                <button class='btn btn-success btn-sm' id='accion' name='accion' value='editar' type='submit'>
                <i class='fas fa-pen'></i></button></td>";
            echo '</tr>';
        }
        echo '</tbody>';
        echo '</table>';
        echo '</div>';
        /*} else {
            echo "<div class='alert alert-danger d-flex align-items-center mt-5' role='alert'>
            <svg class='bi flex-shrink-0 me-2' width='24' height='24' role='img' aria-label='Danger:'><use xlink:href='#exclamation-triangle-fill'/></svg>
            <div>No se encontro ninguna Usuario con ese dni.</div></div>";
        }*/

        ?>

        <!-- Botones -->
        <div class="mb-5">
            <a class="btn btn-dark" href="../ejercicios/listarUsuarios.php" role="button"><i class="fas fa-angle-double-left"></i> Regresar</a>
        </div>
    </form>
</div>

<?php
include_once("../estructura/pieBT.php");
?>