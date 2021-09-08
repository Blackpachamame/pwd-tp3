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
        $deporte = $datos["deporte"];

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
        $dep = count($deporte);
        if ($dep != null) {
            for ($i = 1; $i <= $dep; $i++) {
                $cantDep = $cantDep + 1;
            }
        }

        $texto = "";

        if ($edad >= 18) {
            $texto = "<h4>Datos</h4>
                 <strong>Nombre:</strong> " . $nombre .
                "<br /><strong>Apellido:</strong> " . $apellido .
                "<br /><strong>Direccion:</strong> " . $direccion .
                "<br /><strong>Mayor de edad:</strong> Si
                 <br /><strong>Sexo:</strong> " . $sex .
                "<br /><strong>Nivel de estudio:</strong> " . $est .
                "<br /><strong>Cantidad de deportes:</strong> " . $cantDep;
        } else {
            $texto = "<h4>Datos</h4>
                 <strong>Nombre:</strong> " . $nombre .
                "<br /><strong>Apellido:</strong> " . $apellido .
                "<br /><strong>Direccion:</strong> " . $direccion .
                "<br /><strong>Mayor de edad:</strong> No
                 <br /><strong>Sexo:</strong> " . $sex .
                "<br /><strong>Nivel de estudio:</strong> " . $est .
                "<br /><strong>Cantidad de deportes:</strong> " . $cantDep;;
        }

        return $texto;
    }
}
