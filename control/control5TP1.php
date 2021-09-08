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
            $texto = "<h4>Datos</h4>
                 <strong>Nombre:</strong> " . $nombre .
                "<br /><strong>Apellido:</strong> " . $apellido .
                "<br /><strong>Direccion:</strong> " . $direccion .
                "<br /><strong>Mayor de edad:</strong> Si
                 <br /><strong>Sexo:</strong> " . $sex .
                "<br /><strong>Nivel de estudio:</strong> " . $est;
        } else {
            $texto = "<h4>Datos</h4> <br />
                 <strong>Nombre:</strong> " . $nombre .
                "<br /><strong>Apellido:</strong> " . $apellido .
                "<br /><strong>Direccion:</strong> " . $direccion .
                "<br /><strong>Mayor de edad:</strong> No
                 <br /><strong>Sexo:</strong> " . $sex .
                "<br /><strong>Nivel de estudio:</strong> " . $est;
        }

        return $texto;
    }
}
