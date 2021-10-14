<?php
class AbmUsuariorol
{

    private function cargarObjeto($param)
    {
        $obj = null;
        if (array_key_exists('idusuario', $param) and array_key_exists('idrol', $param)) {
            $objusuario = new Usuario();
            $objusuario->setIdusuario($param['idusuario']);
            $objusuario->cargar();

            $objrol = new Rol();
            $objrol->setIdrol($param['idrol']);
            $objrol->cargar();

            $obj = new Usuariorol();
            $obj->setear($objusuario, $objrol);
        }
        return $obj;
    }


    //Definir como se va a cargar el objeto y asignar las claves de lo que hace falta
    private function cargarObjetoConClave($param)
    {
        $obj = null;

        if (isset($param[''])) {
            $obj = new Usuariorol();
            $obj->setear($param[''], null, null,);
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
        if (isset($param['idusuario']) && isset($param['idrol']))
            $resp = true;
        return $resp;
    }


    /**
     * Carga un objeto con los datos pasados por parámetro y lo 
     * Inserta en la base de datos
     * @param array $param= idusuario/idrol
     * @return boolean
     */
    public function alta($param)
    {
        $resp = false;
        //Creo objeto con los datos
        $elObj = $this->cargarObjeto($param);
        //Verifico que el objeto no sea nulo y lo inserto en BD 
        if ($elObj != null and $elObj->insertar()) {
            $resp = true;
        }
        return $resp;
    }


    /**
     * Por lo general no se usa ya que se utiliza borrado lógico (es decir pasar de activo a inactivo)
     * Permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function baja($param)
    {
        $resp = false;
        if ($this->seteadosCamposClaves($param)) {
            $elObjtArchivoE = $this->cargarObjetoConClave($param);
            if ($elObjtArchivoE != null and $elObjtArchivoE->eliminar()) {
                $resp = true;
            }
        }
        return $resp;
    }


    /**
     * Puede traer un obj específico o toda la lista si el parámetro es null
     * Permite buscar un objeto
     * @param array $param
     * @return array
     */
    public function buscar($param)
    {
        $where = " true ";
        if ($param <> NULL) {
            if (isset($param['idusuario']))
                $where .= " and idusuario =" . $param['idusuario'];
            if (isset($param['idrol']))
                $where .= " and idrol =" . $param['idrol'];
        }
        $arreglo = Usuariorol::listar($where);
        return $arreglo;
    }


    /** 
     * Busca todos los usuariorol correspondientes a un objusuario
     * Lista todos los roles que tiene el usuario
     * @param object
     * @return array devuelve las descripciones de cada rol de dicho usuario
     */
    public function buscarRolesUsuario($elObjtUsuario)
    {
        $listaUsRol = [];
        //Listo todos los obj usuariorol
        $listaUsRol = $this->buscar(null);
        if ($listaUsRol != "") {
            $roles = [];
            //Agrego todos los roles que tenga el usuario en el array $roles
            foreach ($listaUsRol as $usuariorol) {
                if ($usuariorol->getOBJusuario()->getIdusuario() == $elObjtUsuario->getIdusuario()) {
                    $roldescrip = $usuariorol->getOBJrol()->getroldescripcion();
                    array_push($roles, $roldescrip);
                }
            }
        }
        return $roles;
    }
}
