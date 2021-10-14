<?php

class control_ej5
{
    public function verInformacion($datos)
    {
        $nombre = $datos['nombre'];
        $apellido = $datos['apellido'];
        $edad = $datos['edad'];
        $direccion = $datos['direccion'];
        $estudios = $datos["estudio"];
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

        $texto = "";

        //Edad
        if ($edad >= 18) {
            $texto = "<h3>Datos</h3>
                 <b>Nombre:</b> " . $nombre .
                "<br /><b>Apellido:</b> " . $apellido .
                "<br /><b>Dirección:</b> " . $direccion .
                "<br /><b>Mayor de edad:</b> Si
                 <br /><b>Sexo:</b> " . $sex .
                "<br /><b>Nivel de estudio:</b> " . $est;
        } else {
            $texto = "<h3>Datos</h3>
                 <b>Nombre:</b> " . $nombre .
                "<br /><b>Apellido:</b> " . $apellido .
                "<br /><b>Dirección:</b> " . $direccion .
                "<br /><b>Mayor de edad:</b> No
                 <br /><b>Sexo:</b> " . $sex .
                "<br /><b>Nivel de estudio:</b> " . $est;
        }

        return $texto;
    }
}
