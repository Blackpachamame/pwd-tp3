<?php

class control_tp2_ej4
{
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
                          <b>Título:</b> $titulo <br />
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
}
