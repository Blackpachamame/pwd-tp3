<?php

class controlArchivos
{
    public function control_tp3_ej1()
    {
        $dir = "../../uploads/";
        $tam = $_FILES['archivo']['size'];
        $todoOK = true;
        $error = "";
        $retorno = [];
        $retorno['archivo']['link'] = "";
        $retorno['archivo']['error'] = "";

        /* Veamos si se pudo subir a la carpeta temporal */
        if ($_FILES['archivo']['error'] <= 0) {
            $todoOK = true;
            $nombre = $_FILES['archivo']['name'];
        } else {
            $todoOK = false;
            $error = "ERROR: No se pudo cargar el archivo. No se pudo acceder al archivo temporal.";
        }

        /* Verificamos que el archivo sea menor a 2 MB */
        if ($todoOK && $tam / 1024 > 2000) {
            $error = "ERROR: El archivo " . $nombre . " supera los 2 MB.";
            $todoOK = false;
        }

        /* Intentamos copiar el archivo al servidor */
        if ($todoOK && !copy($_FILES['archivo']['tmp_name'], $dir . $nombre)) {
            $error = "ERROR: No se pudo copiar el archivo.";
            $todoOK = false;
        }

        /* Si esta todoOK pasamos el link y, si no, pasamos el error */
        if ($todoOK) {
            $retorno['archivo']['link'] = $dir . $nombre;
        } else {
            $retorno['archivo']['error'] = $error;
        }

        return $retorno;
    }


    public function control_tp3_ej2()
    {
        $dir = "../../uploads/";
        $nombre = $_FILES['texto']['name'];
        $todoOK = true;
        $error = "";
        $retorno = [];
        $retorno['texto']['link'] = "";
        $retorno['texto']['error'] = "";

        /* Veamos si se pudo subir a la carpeta temporal */
        if ($_FILES['texto']['error'] <= 0) {
            $todoOK = true;
        } else {
            $todoOK = false;
            $error = "ERROR: No se pudo cargar el archivo.";
        }

        /* Intentamos copiar el archivo al servidor */
        if ($todoOK && !copy($_FILES['texto']['tmp_name'], $dir . $nombre)) {
            $error = "ERROR: No se pudo copiar el archivo.";
            $todoOK = false;
        }

        /* Si esta todoOK pasamos el link y, si no, pasamos el error */
        if ($todoOK) {
            $retorno['texto']['link'] = $dir . $nombre;
        } else {
            $retorno['texto']['error'] = $error;
        }

        return $retorno;
    }


    public function control_tp3_ej3()
    {
        $dir = "../../uploads/";
        $nombre = $_FILES['imagen']['name'];
        $todoOK = true;
        $error = "";
        $retorno = [];
        $retorno['imagen']['link'] = "";
        $retorno['imagen']['error'] = "";

        /* Veamos si se pudo subir a la carpeta temporal */
        if ($_FILES['imagen']['error'] <= 0) {
            $todoOK = true;
        } else {
            $todoOK = false;
            $error = "ERROR: No se pudo cargar la imagen.";
        }

        /* Intentamos copiar la imagen al servidor */
        if ($todoOK && !copy($_FILES['imagen']['tmp_name'], $dir . $nombre)) {
            $error = "ERROR: No se pudo copiar la imagen.";
            $todoOK = false;
        }

        /* Si esta todoOK pasamos el link y, si no, pasamos el error */
        if ($todoOK) {
            $retorno['imagen']['link'] = $dir . $nombre;
        } else {
            $retorno['imagen']['error'] = $error;
        }

        return $retorno;
    }


    public function verInformacion($datos)
    {
        $titulo = $datos["titulo"];
        $actores = $datos["actores"];
        $director = $datos["director"];
        $guion = $datos["guion"];
        $produccion = $datos["produccion"];
        $year = $datos["year"];
        $nacion = $datos["nacion"];
        $genero = $datos["genero"];
        $minutos = $datos["minutos"];
        $edad = $datos["edad"];
        $sinopsis = $datos["sinopsis"];

        if ($edad == "md") {
            $rEdad = "Mayores de 18 A&ntilde;os";
        } elseif ($edad == "ms") {
            $rEdad = "Mayores de 7 A&ntilde;os";
        } else {
            $rEdad = "Apta para todo público";
        }

        $texto = "<h3>Información de la película</h3>
                          <p><b>Título:</b> $titulo <br />
                          <b>Actores:</b> $actores <br />
                          <b>Director:</b> $director <br />
                          <b>Guión:</b> $guion <br />
                          <b>Producción:</b> $produccion <br />
                          <b>A&ntilde;o:</b> $year <br />
                          <b>Nacionalidad:</b> $nacion <br />
                          <b>Genero:</b> $genero <br />
                          <b>Duración:</b> $minutos minutos<br />
                          <b>Restricciones de edad:</b> $rEdad <br />
                          <b>Sinopsis:</b> $sinopsis <br />";
        return $texto;
    }


    public function obtenerArchivos()
    {
        $directorio = "../../uploads/";
        $archivos = scandir($directorio, 1);
        return $archivos;
    }


    public function obtenerInfoDeArchivo($datos)
    {
        $directorio = "../../uploads/";

        foreach ($datos as $clave => $valor)
            $nombreArchivo = str_replace("Seleccion:", '', $clave);
        $nombreArchivo = str_replace("_", '.', $nombreArchivo);
        $nombreArchivoFull = $directorio . $nombreArchivo;
        $nombreArchivoObservaciones = substr($nombreArchivo, 0, strlen($nombreArchivo) - 4) . "_OBS.txt";
        // $nombreArchivoPDF = substr($nombreArchivo, 0, strlen($nombreArchivo) - 4) . ".pdf";

        $datosStat = stat($nombreArchivoFull);

        //stat devuelve un arreglo con datos del archivo.
        //si da error devuelve null
        //pero voy a crear un arreglo propio con los datos que a mi me interesan nada mas
        //y con claves más entendibles

        $finfo = new finfo(FILEINFO_MIME); // Devuelve el tipo mime

        /*Voy a devolver las observaciones en el arreglo
        Se que las observaciones se guardan en un archivo .txt que tiene en el nombre el sufijo "OBS*/

        $observaciones = "";
        if (file_exists($directorio . $nombreArchivoObservaciones)) {
            $fArchivoOBS = fopen($directorio . $nombreArchivoObservaciones, "r");
            $observaciones = fread($fArchivoOBS, filesize($directorio . $nombreArchivoObservaciones));
            fclose($fArchivoOBS);
        }

        /*Y ahora voy a ver si hay un PDF, si hay, voy a devolver true*/
        //$hayArchivo = file_exists($directorio . $nombreArchivoPDF);

        $datosArch = [
            "Tamanio" => $datosStat[7],
            "UltimoAcceso" => $datosStat[8],
            "Enlaces" => $datosStat[3],
            "UltimaModificacion" => $datosStat[9],
            "Tipo" => $finfo->file($nombreArchivoFull),
            "NombreArchivo" => $nombreArchivo,
            "Observaciones" => $observaciones
            // "HayArchivodeTexto" => $hayArchivo,
            // "ArchivoTexto" => $nombreArchivoPDF

        ];

        //finfo_close($finfo);

        return $datosArch;
    }



    public function obtenerContenido()
    {
        $directorio = "../../uploads/";
        $nombreArchivo = $_FILES['texto']['name'];
        $link = $directorio . $nombreArchivo;

        /*Voy a devolver las observaciones en el arreglo
        Se que las observaciones se guardan en un archivo .txt que tiene en el nombre el sufijo "OBS*/

        $observaciones = "";
        if (file_exists($link)) {
            $fp = fopen($link, "r");
            $observaciones = fread($fp, filesize($link));
            fclose($fp);
        } else {
            $observaciones = "ERROR: El archivo no existe.";
        }

        $datosTexto = [
            "Observaciones" => $observaciones
        ];

        return $datosTexto;
    }
}
