<?php
class Usuario
{
    private $idusuario;
    private $usnombre;
    private $uspass;
    private $usmail;
    private $usdeshabilitado;



    public function __construct()
    {

        $this->idusuario = "";
        $this->usnombre = "";
        $this->uspass = "";
        $this->usmail = "";
        $this->usdeshabilitado = "";
      
    }
    public function setear($idusuario, $usnombre, $uspass, $usmail, $usdeshabilitado)
    {
        $this->setidusuario($idusuario);
        $this->setusnombre($usnombre);
        $this->setuspass($uspass);
        $this->setusmail($usmail);
        $this->setusdeshabilitado($usdeshabilitado);
     
    }



    public function getidusuario()
    {
        return $this->idusuario;
    }
    public function setidusuario($valor)
    {
        $this->idusuario = $valor;
    }

    public function getusnombre()
    {
        return $this->usnombre;
    }
    public function setusnombre($valor)
    {
        $this->usnombre = $valor;
    }
    public function getuspass()
    {
        return $this->uspass;
    }
    public function setuspass($valor)
    {
        $this->uspass = $valor;
    }
    public function getusmail()
    {
        return $this->usmail;
    }
    public function setusmail($valor)
    {
        $this->usmail = $valor;
    }
    public function getusdeshabilitado()
    {
        return $this->usdeshabilitado;
    }
    public function setusdeshabilitado($valor)
    {
        $this->usdeshabilitado = $valor;
    }
    public function getmensajeoperacion()
    {
        return $this->mensajeoperacion;
    }
    public function setmensajeoperacion($valor)
    {
        $this->mensajeoperacion = $valor;
    }


    public function cargar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM persona WHERE idusuario = " . $this->getidusuario();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    $row = $base->Registro();
                    $this->setear($row['idusuario'], $row['usnombre'], $row['uspass'], $row['usmail'], $row['$usdeshabilitado']);
                }
            }
        } else {
            $this->setmensajeoperacion("Tabla->listar: " . $base->getError());
        }
        return $resp;
    }
    public function MostrarNombreyusnombre()
    {
        return  $this->getusnombre(); //borre lo que seria el id;
    }

    public function insertar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "INSERT INTO persona(idusuario,usnombre,uspass,usmail,usdeshabilitado)  VALUES('" . $this->getidusuario() . "','" . $this->getusnombre() . "','" . $this->getuspass() . "','" . $this->getusmail() . "','" . $this->getusdeshabilitado()."');";
        if ($base->Iniciar()) {
            if ($elid = $base->Ejecutar($sql)) {
                $this->setidusuario($elid);
                $resp = true;
            } else {
                $this->setmensajeoperacion("Tabla->insertar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Tabla->insertar: " . $base->getError());
        }
        return $resp;
    }

    public function modificar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "UPDATE persona SET usnombre='" . $this->getusnombre() . "',
        Nombre='" . $this->getuspass() . "',
        usmail='" . $this->getusmail() . "',
        usdeshabilitado='" . $this->getusdeshabilitado() . "'
        WHERE idusuario=" . $this->getidusuario();
        if ($base->Iniciar()) {
            //var_dump($sql);
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Tabla->modificar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Tabla->modificar: " . $base->getError());
        }
        return $resp;
    }

    public function eliminar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "DELETE FROM persona WHERE DniNro=" . $this->getidusuario();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setmensajeoperacion("Tabla->eliminar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Tabla->eliminar: " . $base->getError());
        }
        return $resp;
    }

    public static function listar($parametro = "")
    {
        $arreglo = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM persona ";
        if ($parametro != "") {
            $sql .= 'WHERE ' . $parametro;
        }
        $res = $base->Ejecutar($sql);
        if ($res > -1) {
            if ($res > 0) {

                while ($row = $base->Registro()) {
                    $obj = new Persona();
                    $obj->setear($row['idusuario'], $row['usnombre'], $row['uspass'], $row['usmail'], $row['usdeshabilitado']);
                    array_push($arreglo, $obj);
                }
            }
        } else {
            //$this->setmensajeoperacion("Tabla->listar: " . $base->getError());
        }

        return $arreglo;
    }


    function __toString()
    {
        return $this->getidusuario() . ' ' . $this->getusnombre();
    }
}
