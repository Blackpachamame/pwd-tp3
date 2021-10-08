<?php
class AbmUsuario
{
    //Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto


    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto
     * @param array $param
     * @return Usuario
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
            $obj = new Usuario();
            $obj->setear($param['NroDni'], $param['Apellido'], $param['Nombre'], $param['fechaNac'], $param['Telefono'], $param['Domicilio']);
        }

        return $obj;
    }

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return Usuario
     */
    private function cargarObjetoConClave($param)
    {
        $obj = null;

        if (isset($param['NroDni'])) {
            $obj = new Usuario();
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
            $elObjtUsuario = $this->cargarObjeto($param);
            if ($elObjtUsuario != null and $elObjtUsuario->insertar()) {
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
            $elObjtUsuario = $this->cargarObjetoConClave($param);
            if ($elObjtUsuario != null and $elObjtUsuario->eliminar()) {
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
            $laUsuario = $this->buscar($buscar2);
            if ($laUsuario != null) {
                $laUsuario[0]->setApellido($param['Apellido']);
                $laUsuario[0]->setNombre($param['Nombre']);
                $laUsuario[0]->setfechaNac($param['fechaNac']);
                $laUsuario[0]->setTelefono($param['Telefono']);
                $laUsuario[0]->setDomicilio($param['Domicilio']);
                if ($laUsuario[0] != null and $laUsuario[0]->modificar()) {
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
        $arreglo = Usuario::listar($where);

        return $arreglo;
    }
}