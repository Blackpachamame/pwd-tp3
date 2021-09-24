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
        //print_r($param);
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
        //$param['NroDni']= null;
        $elObjtTabla = $this->cargarObjeto($param);
        //verEstructura($elObjtTabla);
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
            $posPersona = $param['NroDni'];
            $lapersona = $this->buscar($param['NroDni']);
            //var_dump($lapersona);
            $cont = 0;
            foreach ($lapersona as $objPersona) {
                //var_dump($objPersona);
                if ($objPersona->getNroDni() != $posPersona) {
                    $cont++;
                } else {
                    break;
                }
            }
            //$cambiodni = (array_key_exists('Apellido', $param)); 
            //var_dump($param,$lapersona);
            //var_dump($lapersona[0]);
            if ($lapersona != null) {
                $lapersona[$cont]->setApellido($param['Apellido']);
                $lapersona[$cont]->setNombre($param['Nombre']);
                $lapersona[$cont]->setfechaNac($param['fechaNac']);
                $lapersona[$cont]->setTelefono($param['Telefono']);
                $lapersona[$cont]->setDomicilio($param['Domicilio']);
                if ($lapersona[$cont] != null and $lapersona[$cont]->modificar()) {
                    $resp = true;
                }
            }
            //$elObjtTabla = $this->cargarObjeto($param);
            // if ($lapersona != null and $lapersona->modificar()) {
            //     $resp = true;
            // }
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
