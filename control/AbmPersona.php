<?php
class AbmPersona
{
    //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto


    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Persona
     */
    private function cargarObjeto($param)
    {
        $obj = null;
        if (
            array_key_exists('NroDni', $param)
            and array_key_exists('Apellido', $param)
            and array_key_exists('Nombre', $param)
            and array_key_exists('fechaNac', $param)
            and array_key_exists('Telefono', $param)
            and array_key_exists('Domicilio', $param)
        ) {
            $obj = new Persona();
            $obj->setear($param['NroDni'], $param['Apellido'], $param['Nombre'], $param['fechaNac'], $param['Telefono'], $param['Domicilio']);
        }

        return $obj;
    }

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return Persona
     */
    private function cargarObjetoConClave($param)
    {
        $obj = null;

        if (isset($param['NroDni'])) {
            $obj = new Persona();
            $obj->setear($param['NroDni'], "", "", "", "", "", "");
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
        if (isset($param['NroDni']))
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
        $buscar2 = array();
        $buscar2['NroDni'] = $param['NroDni'];
        $encuentraPer = $this->buscar($buscar2);

        if ($encuentraPer == null) {
            $elObjtTabla = $this->cargarObjeto($param);
            if ($elObjtTabla != null and $elObjtTabla->insertar()) {
                $resp = true;
            }
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
        $resp = false;
        if ($this->seteadosCamposClaves($param)) {
            $buscar2 = array();
            $buscar2['NroDni'] = $param['NroDni'];
            $lapersona = $this->buscar($buscar2);
            //var_dump($lapersona);
            //$cambiodni = (array_key_exists('Apellido', $param)); 
            //var_dump($param,$lapersona);
            var_dump($lapersona);
            if ($lapersona != null) {
                $lapersona[0]->setApellido($param['Apellido']);
                $lapersona[0]->setNombre($param['Nombre']);
                $lapersona[0]->setfechaNac($param['fechaNac']);
                $lapersona[0]->setTelefono($param['Telefono']);
                $lapersona[0]->setDomicilio($param['Domicilio']);
                if ($lapersona[0] != null and $lapersona[0]->modificar()) {
                    $resp = true;
                }
            }
        }
        return $resp;
    }

    /**
     * permite buscar un objeto
     * @param array $param
     * @return array
     */
    public function buscar($param)
    {
        $where = " true ";
        if ($param <> NULL) {
            if (isset($param['NroDni']))
                $where .= " and NroDni =" . $param['NroDni'];
            if (isset($param['Apellido']))
                $where .= " and Apellido ='" . $param['Apellido'] . "'";
            if (isset($param['Nombre']))
                $where .= " and Nombre ='" . $param['Nombre'] . "'";
            if (isset($param['fechaNac']))
                $where .= " and fechaNac ='" . $param['fechaNac'] . "'";
            if (isset($param['Telefono']))
                $where .= " and Telefono ='" . $param['Telefono'] . "'";
            if (isset($param['Domicilio']))
                $where .= " and Domicilio ='" . $param['Domicilio'] . "'";
        }
        $arreglo = Persona::listar($where);

        return $arreglo;
    }
}
