<?php

/*3. Implementar dentro de la capa de Control la clase Session con los siguientes métodos:
• _ _construct(). Constructor que. Inicia la sesión.
• iniciar($nombreUsuario,$passUsuario). Actualiza las variables de sesión con los valores ingresados.
• validar(). Valida si la sesión actual tiene usuario y passUsuario válidos. Devuelve true o false.
• activa(). Devuelve true o false si la sesión está activa o no. 
• getUsuario().Devuelve el usuario logeado.
• getRol(). Devuelve el rol del usuario logeado.
• cerrar(). Cierra la sesión actual.
 */



class Session
{
    private $userName;
    private $pass;
    //private $listaRoles;
    private $mensajeoperacion;


    /** CONSTRUCTOR **/
    public function __construct()
    {
        session_start();
    }


    /** GETS Y SETS **/
    public function getUserName()
    {
        return $_SESSION['usnombre'];
    }

    public function setUserName($userName)
    {
        $_SESSION['usnombre'] = $userName;
    }

    public function getPass()
    {
        return $_SESSION['uspass'];
    }
    public function setPass($pass)
    {
        $_SESSION['uspass'] = $pass;
    }

    /*public function getListaRoles()
    {
        return $this->listaRoles;
    }

    public function setListaRoles($listaRoles)
    {
        $this->listaRoles = $listaRoles;
    }*/

    public function getMensajeoperacion()
    {
        return $this->mensajeoperacion;
    }

    public function setMensajeoperacion($mensajeoperacion)
    {
        $this->mensajeoperacion = $mensajeoperacion;
    }


    /** VALIDAR **/
    public function validar()
    {
        $valido = false;
        $nombre = $this->getUserName();
        $pass = $this->getPass();
        $objAbm = new AbmUsuario();
        $filtro = array();
        $filtro['usnombre'] = $nombre;
        $filtro['uspass'] = $pass;
        $arreglo = $objAbm->buscar($filtro);
        if (count($arreglo) == 1) {
            //Chequeo que no haya sido borrado
            if (!($arreglo[0]->getUsdeshabilitado())) {
                $valido = true;
            }
            //Chequeo que tenga un rol asignado
            $abmUserRol = new AbmUsuarioRol();
            $arrayUserRol = $abmUserRol->buscar(['idusuario' => $arreglo[0]->getIdusuario()]);
            if (count($arrayUserRol) < 1) {
                $valido = false;
            }
        }
        return $valido;
        /*$inicia = false;
        $abmUsuario = new AbmUsuario();
        $nombreUsuario = $_SESSION['idusuario'];
        $passUsuario = $_SESSION['usnombre'];
        $where = ['usnombre' => $nombreUsuario, 'uspass' => $passUsuario];
        $listaUsuarios = $abmUsuario->buscar($where);
        if (count($listaUsuarios) > 0) {
            $inicia = true;
        }
        return $inicia;*/
    }


    /** INICIAR **/
    public function iniciar($nombreUsuario, $passUsuario)
    {
        $this->setUserName($nombreUsuario);
        $this->setPass($passUsuario);
        /*if ($this->activa()) {
            $_SESSION['idusuario'] = $nombreUsuario;
            $_SESSION['usnombre'] = $passUsuario;
        }
        return $_SESSION;*/
    }


    /** ACTIVA **/
    public function activa()
    {
        $activa = false;
        if (isset($_SESSION['usnombre'])) {
            $activa = true;
        }
        return $activa;
    }


    /** GET USUARIO **/
    public function getUsuario()
    {
        $objUs = null;
        $abmUs = new AbmUsuario();
        $arrayUs = $abmUs->buscar(['usnombre' => $this->getUserName(), 'uspass' => $this->getPass()]);
        if (count($arrayUs) == 1) {
            $objUs = $arrayUs[0];
        }
        return $objUs;
        /*$abmUsuario = new AbmUsuario();
        $where = ['usnombre' => $_SESSION['usnombre'], 'idusuario' => $_SESSION['idusuario']];
        $listaUsuarios = $abmUsuario->buscar($where);
        if ($listaUsuarios >= 1) {
            $usuarioLog = $listaUsuarios[0];
        }
        return $usuarioLog;*/
    }


    /** GET ROL **/
    public function getRol()
    {
        $roles = [];
        $nombre = ['usnombre' => $this->getUserName()];
        $abmUs = new AbmUsuario();
        $arreglo = $abmUs->buscar($nombre);
        if (count($arreglo) == 1) {
            $id = $arreglo[0]->getIdusuario();
            $abmUserRol = new AbmUsuarioRol();
            $roles = $abmUserRol->buscar(['idusuario' => $id]);
        }
        return $roles;
        /*
        $abmUsuarioRol = new AbmUsuarioRol();
        $usuario = $this->getUsuario();
        $idUsuario = $usuario->getIdUsuario();
        $param = ['idusuario' => $idUsuario];
        $listaRolesUsu = $abmUsuarioRol->buscar($param);
        if ($listaRolesUsu > 1) {
            $rol = $listaRolesUsu;
        } else {
            $rol = $listaRolesUsu[0];
        }
        return $rol;*/
    }


    /** CERRAR **/
    public function cerrar()
    {
        session_unset();
        session_destroy();
    }
}
