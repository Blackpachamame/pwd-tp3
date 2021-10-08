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



class Session {
  	

    //-----------------------------constructor
    public function __construct() {
		if (session_status() === PHP_SESSION_NONE){
		session_start();
	     }
    }

    public function iniciar(){

    }

    public function validar(){

    }

    public function activa(){

    }

    //---------------------------------getuser

   


    //--------------------------------getrol


    
    public function cerrar(){
        
    }



    
}//clase