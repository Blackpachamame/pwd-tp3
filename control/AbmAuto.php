<?php
class AbmAuto
{
    //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto


    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Auto
     */
    private function cargarObjeto($param)
    {
        $obj = null;
        $cambiodni= (array_key_exists('Patente', $param)
        and array_key_exists('Marca', $param)
        and array_key_exists('Modelo', $param)
        and array_key_exists('DniDuenio', $param));
        //var_dump($param['Patente']);

        if ($cambiodni) {
            $obj = new Auto();
            $obj->setear($param['Patente'], $param['Marca'], $param['Modelo'], $param['DniDuenio']);
        }
        return $obj;
    }

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return Auto
     */
    private function cargarObjetoConClave($param)
    {
        $obj = null;

        if (isset($param['Patente'])) {
            $obj = new Auto();
            $obj->setear($param['Patente'], "", "", "");
        }
        return $obj;
    }


    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */

    private function seteadosCamposClaves($param)
    {
        $resp = false;
        if (isset($param['Patente']))
            $resp = true;
        return $resp;
    }

    /**
     * 
     * @param array $param
     */
    public function alta($param)
    {
        $resp = false;
        //$param['Patente'] = null;
        $elObjtTabla = $this->cargarObjeto($param);
        //        verEstructura($elObjtTabla);
        if ($elObjtTabla != null and $elObjtTabla->insertar()) {
            $resp = true;
        }
        return $resp;
    }
    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function baja($param)
    {
        $resp = false;
        if ($this->seteadosCamposClaves($param)) {
            $elObjtTabla = $this->cargarObjetoConClave($param);
            if ($elObjtTabla != null and $elObjtTabla->eliminar()) {
                $resp = true;
            }
        }

        return $resp;
    }

    /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param)
    {
        //echo "Estoy en modificacion";
        $resp = false;
        if ($this->seteadosCamposClaves($param)) {
            $elAuto= new Auto();
            $elAuto = $this->buscar($param);
            //var_dump($elAuto);
            $cambiodni = (array_key_exists('Dnicambio', $param));            
            if($cambiodni){            
               $elAuto[0]->setDniDuenio($param['Dnicambio']);
               if ($elAuto[0] != null and $elAuto[0]->modificar()) {
                $resp = true;
                }
            }            
            //var_dump($param);            
            //$elObjtTabla = $this->cargarObjeto($param);
            //var_dump($elObjtTabla); 
            // else if ($elAuto != null and $elAuto->modificar()) {
            //     $resp = true;
            // }
        }
        return $resp;
    }

    /**
     * permite buscar un objeto
     * @param array $param
     * @return array||Auto
     */
    public function buscar($param)
    {
        $where = " true ";
        if ($param <> NULL) {
            if (isset($param['Patente']))
                $where .= " and Patente ='" . $param['Patente'] . "'";
            if (isset($param['Marca']))
                $where .= " and Marca ='" . $param['Marca'] . "'";
            if (isset($param['Modelo']))
                $where .= " and Modelo =" . $param['Modelo'];
            if (isset($param['DniDuenio']))
                $where .= " and DniDuenio ='" . $param['DniDuenio'] . "'";
        }

        $arreglo = Auto::listar($where);
        return $arreglo;
    }
}
