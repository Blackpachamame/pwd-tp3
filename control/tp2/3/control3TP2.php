<?php
class control_tp2_ej3
{
    public function verInformacion($datos)
    {
        $user = $datos["username"];
        $pass = $datos["password"];
        $verifica = false;
        // Datos Guardados
        $array_1 = ["usuario" => "anakin", "clave" => "jedi66orden"];
        $array_2 = ["usuario" => "zeus", "clave" => "mathura75"];
        $array_3 = ["usuario" => "homero", "clave" => "1magios5"];
        $array = [$array_1, $array_2, $array_3];

        for ($i = 0; $i < (count($array)); $i++) {
            if ($array[$i]["usuario"] == $user && $array[$i]["clave"] == $pass) {
                $verifica = true;
                // Cortamos el for si encuentra un usuario
                $i = (count($array)) + 1;
            }
        }

        return $verifica;
    }
}
