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


    /** INICIAR **/
    public function iniciar($nombreUsuario, $passUsuario)
    {
        $this->setUserName($nombreUsuario);
        $this->setPass($passUsuario);
        /*if ($this->activa()) {
            $_SESSION['usnombre'] = $nombreUsuario;
            $_SESSION['uspass'] = $passUsuario;
        }
        return $_SESSION;*/
    }


    /** VALIDAR **/
    public function validar()
    {
        /*$valido = false;
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
        return $valido;*/
        echo "entreeee";
        $inicia = false;
        $nombreUsuario = $this->getUserName();
        $passUsuario = $this->getPass();

        echo $nombreUsuario;
        echo "abajousname";

        $abmUsuario = new AbmUsuario();
        echo "morte";
        $where = array();
        $where['usnombre'] = $nombreUsuario;
        $where['uspass'] = $passUsuario;
        //$where = ['usnombre' => $nombreUsuario, 'uspass' => $passUsuario];
        $listaUsuarios = $abmUsuario->buscar($where);
        if (count($listaUsuarios) > 0) {
            $inicia = true;
        }
        return $inicia;
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
        $abmUsuario = new AbmUsuario();
        $where = ['usnombre' => $_SESSION['usnombre'], 'idusuario' => $_SESSION['idusuario']];
        $listaUsuarios = $abmUsuario->buscar($where);
        if ($listaUsuarios >= 1) {
            $usuarioLog = $listaUsuarios[0];
        }
        return $usuarioLog;
    }


    /** GET ROL **/
    public function getRol()
    {
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
        return $rol;
    }


    /** CERRAR **/
    public function cerrar()
    {
        session_unset();
        session_destroy();
    }
}
