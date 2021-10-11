<?php

/*3. Implementar dentro de la capa de Control la clase Session con los siguientes métodos:
• _ _construct(). Constructor que. Inicia la sesión.
• iniciar($nombreUsuario,$psw). Actualiza las variables de sesión con los valores ingresados.
• validar(). Valida si la sesión actual tiene usuario y psw válidos. Devuelve true o false.
• activa(). Devuelve true o false si la sesión está activa o no. 
• getUsuario().Devuelve el usuario logeado.
• getRol(). Devuelve el rol del usuario logeado.
• cerrar(). Cierra la sesión actual.
 */



class Session
{
    private $objUsuario;
    private $listaRoles;
    private $mensajeoperacion;


    /** CONSTRUCTOR **/
    public function __construct()
    {
        if (session_start()) {
            $this->objUsuario = null;
            $this->listaRoles = [];
            $this->mensajeoperacion = "";
        }
    }


    /** GETS Y SETS **/
    public function getObjUsuario()
    {
        return $this->objUsuario;
    }

    public function setObjUsuario($objUsuario)
    {
        $this->objUsuario = $objUsuario;
    }

    public function getListaRoles()
    {
        return $this->listaRoles;
    }

    public function setListaRoles($listaRoles)
    {
        $this->listaRoles = $listaRoles;
    }

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
        $inicia = false;
        $abmUsuario = new AbmUsuario();
        $nombreUsuario = $_SESSION['idusuario'];
        $psw = $_SESSION['nombreUsu'];
        $where = ['usnombre' => $nombreUsuario, 'uspsw' => $psw];
        $listaUsuarios = $abmUsuario->buscar($where);
        if (count($listaUsuarios) > 0) {
            $inicia = true;
        }
        return $inicia;
    }


    /** INICIAR **/
    public function iniciar($nombreUsuario, $psw)
    {
        if ($this->activa()) {
            $_SESSION['idusuario'] = $nombreUsuario;
            $_SESSION['nombreUsu'] = $psw;
        }

        return $_SESSION;
    }


    /** ACTIVA **/
    public function activa()
    {
        $activa = false;
        if (session_start()) {
            $activa = true;
        }
        return $activa;
    }


    /** GET USUARIO **/
    public function getUsuario()
    {
        $abmUsuario = new AbmUsuario();
        $where = ['usnombre' => $_SESSION['nombreUsu'], 'idusuario' => $_SESSION['idusuario']];
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
        $cerrar = false;
        if (session_destroy()) {
            $cerrar = true;
        }
        return $cerrar;
    }
}
