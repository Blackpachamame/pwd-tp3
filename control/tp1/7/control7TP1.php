<?php

class control_ej7
{
    public function verInformacion($datos)
    {
        $v1 = $datos["valor1"];
        $v2 = $datos["valor2"];
        $op = $datos["op"];

        if ($op == "suma") {
            $solucion = $v1 + $v2;
            $texto = "El <b>resultado</b> de (" . $v1 . ") + (" . $v2 . ") es = " . $solucion;
        } elseif ($op == "resta") {
            $solucion = $v1 - $v2;
            $texto = "El <b>resultado</b> de (" . $v1 . ") - (" . $v2 . ") es = " . $solucion;
        } elseif ($op == "multiplicacion") {
            $solucion = $v1 * $v2;
            $texto = "El <b>resultado</b> de (" . $v1 . ") * (" . $v2 . ") es = " . $solucion;
        }
        return $texto;
    }
}
