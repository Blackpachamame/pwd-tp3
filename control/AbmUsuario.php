<?php
class AbmUsuario
{
    //Espera como parametro un arreglo asociativo donde las claves coinciden con los uspasss de las variables instancias del objeto


    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los uspasss de las variables instancias del objeto
     * @param array $param
     * @return Usuario
     */
    private function cargarObjeto($param)
    {
        $obj = null;
        if (
            array_key_exists('idusuario', $param)
            and array_key_exists('usnombre', $param)
            and array_key_exists('uspass', $param)
            and array_key_exists('usmail', $param)
            and array_key_exists('usdeshabilitado', $param)
        ) {
            $obj = new Usuario();
            $obj->setear($param['idusuario'], $param['usnombre'], $param['uspass'], $param['usmail'], $param['usdeshabilitado']);
        }

        return $obj;
    }

    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los uspasss de las variables instancias del objeto que son claves
     * @param array $param
     * @return Usuario
     */
    private function cargarObjetoConClave($param)
    {
        $obj = null;

        if (isset($param['idusuario'])) {
            $obj = new Usuario();
            $obj->setear($param['idusuario'], "", "", "", "", "");
            //???---------------------------catidad seteadaaaaaaa?
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
        if (isset($param['idusuario']))
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
        $buscar2['idusuario'] = $param['idusuario'];
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
            $buscar2['idusuario'] = $param['idusuario'];
            $laUsuario = $this->buscar($buscar2);
            if ($laUsuario != null) {
                $laUsuario[0]->setusnombre($param['usnombre']);
                $laUsuario[0]->setuspass($param['uspass']);
                $laUsuario[0]->setusmail($param['usmail']);
                $laUsuario[0]->setusdeshabilitado($param['usdeshabilitado']);
     
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
            if (isset($param['idusuario']))
                $where .= " and idusuario =" . $param['idusuario'];
            if (isset($param['usnombre']))
                $where .= " and usnombre ='" . $param['usnombre'] . "'";
            if (isset($param['uspass']))
                $where .= " and uspass ='" . $param['uspass'] . "'";
            if (isset($param['usmail']))
                $where .= " and usmail ='" . $param['usmail'] . "'";
            if (isset($param['usdeshabilitado']))
                $where .= " and usdeshabilitado ='" . $param['usdeshabilitado'] . "'";
        }
        $arreglo = Usuario::listar($where);

        return $arreglo;
    }
}