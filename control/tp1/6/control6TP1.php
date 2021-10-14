<?php

class control_ej6
{
    public function verInformacion($datos)
    {
        $nombre = $datos['nombre'];
        $apellido = $datos['apellido'];
        $edad = $datos['edad'];
        $direccion = $datos['direccion'];
        $estudios = $datos["estudios"];
        $sexo = $datos["sexo"];

        //Nivel de Estudio
        if ($estudios == "primario") {
            $est = "Primario";
        } elseif ($estudios == "secundario") {
            $est = "Secundario";
        } else {
            $est = "Sin estudio";
        }

        //Sexo
        if ($sexo == "f") {
            $sex = "Femenino";
        } elseif ($sexo == "m") {
            $sex = "Masculino";
        } else {
            $sex = "Indefinido";
        }

        //Cantidad de Deportes
        $cantDep = 0;
        if (isset($datos["deporte"])) {
            for ($i = 1; $i <= (count($datos["deporte"])); $i++) {
                $cantDep = $cantDep + 1;
            }
        }

        $texto = "";

        if ($edad >= 18) {
            $texto = "<h3>Datos</h3>
                 <b>Nombre:</b> " . $nombre .
                "<br /><b>Apellido:</b> " . $apellido .
                "<br /><b>Direccion:</b> " . $direccion .
                "<br /><b>Mayor de edad:</b> Si
                 <br /><b>Sexo:</b> " . $sex .
                "<br /><b>Nivel de estudio:</b> " . $est .
                "<br /><b>Cantidad de deportes:</b> " . $cantDep;
        } else {
            $texto = "<h3>Datos</h3>
                 <b>Nombre:</b> " . $nombre .
                "<br /><b>Apellido:</b> " . $apellido .
                "<br /><b>Direccion:</b> " . $direccion .
                "<br /><b>Mayor de edad:</b> No
                 <br /><b>Sexo:</b> " . $sex .
                "<br /><b>Nivel de estudio:</b> " . $est .
                "<br /><b>Cantidad de deportes:</b> " . $cantDep;;
        }

        return $texto;
    }
}
