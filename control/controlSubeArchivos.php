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

        /* Verificamos que el tipo de archivo sea PDF o DOC */
        $tipoPDF = strpos(strtoupper($_FILES['archivo']['type']), 'PDF');
        $tipoDOC = strpos(strtoupper($_FILES['archivo']['type']), 'DOC');

        if ($todoOK && !$tipoPDF && !$tipoDOC) {
            $error = "ERROR: El tipo de archivo no es valido.";
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

        /* Verificamos que el tipo de archivo sea TXT */
        $tipoTXT = strpos($_FILES['texto']["type"], 'text/plain');

        if ($todoOK && ($tipoTXT === false)) {
            $error = "ERROR: El tipo de archivo no es valido.";
            $todoOK = false;
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

        /* Verificamos que el tipo de archivo sea de tipo imagen */
        $tipoIMG = strpos($_FILES['imagen']["type"], "image");

        if ($todoOK && ($tipoIMG === false)) {
            $error = "ERROR: El tipo de archivo no es valido.";
            $todoOK = false;
        }

        /* Comprobamos el ancho y alto de la imagen, 
        getimagesize nos devuelve el ancho y alto de la imagen */
        if ($todoOK) {
            $image_info = getimagesize($_FILES['imagen']['tmp_name']);
            $image_width = $image_info[0];
            $image_height = $image_info[1];

            /* Verifico que el ancho sea mayor o igual a 400 */
            $ancho_limite = false;
            if ($image_width >= 400) {
                $ancho_limite = true;
            }

            /* Verifico que el alto sea de (1.5)*(ancho) */
            $alto_limite = false;
            if ($image_height == ($image_width * 1.5)) {
                $alto_limite = true;
            }

            /* Controlamos las dimenciones de la imagen */
            if (!((($ancho_limite) && ($alto_limite)))) {
                $error = "ERROR: La imagen no cumple con las dimensiones establecidas.";
                $todoOK = false;
            }
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

        /* Busco la posicion del punto de la extensión del archivo, para reemplazar con la extensión .txt, 
        Con esto creo un nuevo arhicvo .txt con el mismo nombre */
        $pos = mb_strripos($nombre, ".");
        $texto = $this->verInformacion($_POST);
        $name = substr($nombre, 0, $pos) . ".txt";
        $name = $dir . $name;
        /* fopen crea un nuevo archivo con nombre $name y con "w" reemplaza la información si ya existia */
        $ar = fopen($name, "w") or die("error al crear");
        fwrite($ar, $texto);
        fclose($ar);
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
        foreach ($datos as $clave => $valor) {
            $nombreArchivo = str_replace("Seleccion:", '', $clave);
        }

        /* pos y ultPos lo usamos para reemplazar el tipo de arhivo sea cual sea su longitud (.png o .jpeg) */
        $pos = mb_strripos($nombreArchivo, "_");
        //echo $pos;
        $ultPos = substr($nombreArchivo, $pos);
        //print_r(($ultPos));
        $ultPos = str_replace("_", '.', $ultPos);
        // echo " ";
        // print_r(($ultPos));
        $nombreArchivo = substr($nombreArchivo, 0, $pos) . $ultPos;
        $nombreImagen = $directorio . $nombreArchivo;
        $nombreArchivodescripcion = substr($nombreArchivo, 0, $pos) . ".txt";

        $descripcion = "";
        if (file_exists($directorio . $nombreArchivodescripcion)) {
            $fArchivoOBS = fopen($directorio . $nombreArchivodescripcion, "r");
            $descripcion = fread($fArchivoOBS, filesize($directorio . $nombreArchivodescripcion));
            fclose($fArchivoOBS);
        }

        $datosArch = [
            "link" => $nombreImagen,
            "NombreArchivo" => $nombreArchivo,
            "Descripcion" => $descripcion

        ];

        //finfo_close($finfo);

        return $datosArch;
    }


    public function obtenerContenido()
    {
        $directorio = "../../uploads/";
        $nombreArchivo = $_FILES['texto']['name'];
        $link = $directorio . $nombreArchivo;

        $descripcion = "";
        if (file_exists($link)) {
            $fp = fopen($link, "r");
            $descripcion = fread($fp, filesize($link));
            fclose($fp);
        } else {
            $descripcion = "ERROR: El archivo no existe.";
        }

        $datosTexto = [
            "Descripcion" => $descripcion
        ];

        return $datosTexto;
    }
}
