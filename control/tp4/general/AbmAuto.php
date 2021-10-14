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
        $cambiodni = (array_key_exists('Patente', $param)
            and array_key_exists('Marca', $param)
            and array_key_exists('Modelo', $param)
            and array_key_exists('Duenio', $param));

        if ($cambiodni) {
            $obj = new Auto();
            $obj->setear($param['Patente'], $param['Marca'], $param['Modelo'], $param['Duenio']);
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
     * ALTA
     * @param array $param
     */
    public function alta($param)
    {
        $resp = false;
        $buscarPatente = array();
        $buscarPatente['Patente'] = $param['Patente'];
        $encuentraPat = $this->buscar($buscarPatente);
        if ($encuentraPat == null) {
            $elObjtAuto = $this->cargarObjeto($param);
            if ($elObjtAuto != null and $elObjtAuto->insertar()) {
                $resp = true;
            }
        }
        return $resp;
    }


    /**
     * BAJA 
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
     * MODIFICACION
     * @param array $param
     * @return boolean
     */
    public function modificacion($param)
    {
        $resp = false;
        if ($this->seteadosCamposClaves($param)) {
            $elObjtAuto = $this->cargarObjeto($param);
            if ($elObjtAuto != null and $elObjtAuto->modificar()) {
                $resp = true;
            }
        }
        return $resp;
    }


    /**
     * BUSCAR
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
            if (isset($param['Duenio']))
                $where .= " and Duenio ='" . $param['Duenio'] . "'";
        }
        $arreglo = Auto::listar($where);
        return $arreglo;
    }
}
