<?php
class control_tp2_ej3
{
    public function verInformacion($datos)
    {
        $info = $datos["login"];
        $user = $info["username"];
        $pass = $info["password"];
        // datos guardados
        $array_1 = ["usuario" => "anakin", "clave" => "jedi66orden"];
        $array_2 = ["usuario" => "luke", "clave" => "1lum1na24life"];
        $array_3 = ["usuario" => "homero", "clave" => "1lum1nado5"];
        $array = [$array_1, $array_2, $array_3];

        for ($i = 0; $i < (count($array)); $i++) {
            if ($array[$i]["usuario"] == $user && $array[$i]["clave"] == $pass) {
                $texto = "Sesion Iniciada.";
                $i = 3;
            }else{
                $texto = "Datos Incorrectos.";
            }
        }

        return $texto;
    }
}
