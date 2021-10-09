<?

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


    /** CONSTRUCTOR **/
    public function __construct()
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }



    //-----------get rol y usuarui. 






    /** INICIAR **/
    public function iniciar()
    {

        $this->session_started;
        $this->setAtributo("usuario", $datos["NombreUsuario"]);
        $this->setAtributo("login", $datos["login"]);
        $this->setAtributo("rol", $datos["roles"]);
        $this->setAtributo("idusuario", $datos["idusuario"]);

        $resp = true;

        return $resp;
    }


    /** VALIDAR **/
    public function validar()
    {

        //esta funcion es compleja porque ya maneja en profundidad los obsj
        //validar(). Valida si la sesión actual tiene usuario y psw válidos. Devuelve true o false.
    }


    /** ACTIVA **/
    public function activa()
    {
        $resp = true;
        session_status();
        if (session_status() !== PHP_SESSION_ACTIVE) {
            $resp = false;
        }
        return $resp;
    }


    /** CERRAR **/
    public function cerrar()
    {
        session_destroy();
    }


    public function mostrarValorVariables()
    {
        print_r($_SESSION);
    }
}//clase