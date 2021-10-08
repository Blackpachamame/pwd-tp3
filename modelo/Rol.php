<?php
class Rol
{
    private $idrol;
    private $roldescripcion;

    //metodo constructor 
    public function __construct()
    {
        $this->idrol = "";
        $this->roldescripcion = "";
    }

    //funcion para setear datos
    public function setear($idrol, $roldescripcion)
    {
        $this->setidrol($idrol);
        $this->setroldescripcion($roldescripcion);
    }


      //-----------------------------get
    public function getidrol()
    {
        return $this->idrol;
    }
    public function getroldescripcion()
    {
        return $this->roldescripcion;
    }
    public function getmensajeoperacion()
    {
        return $this->mensajeoperacion;
    }
     //----------------------------set

    public function setidrol($valor)
    {
        $this->idrol = $valor;
    }
    public function setroldescripcion($valor)
    {
        $this->roldescripcion = $valor;
    }
    public function setmensajeoperacion($valor)
    {
        $this->mensajeoperacion = $valor;
    }

    
    //
    public function cargar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM rol WHERE idrol = " . $this->getidrol();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    $row = $base->Registro();
                    $this->setear($row['idrol'], $row['roldescripcion']);
                }
            }
        } else {
            $this->setmensajeoperacion("Tabla->listar: " . $base->getError());
        }
        return $resp;
    }

    /*
    public function MostrarNombreyroldescripcion()
    {
        return $this->getNombre() . ' ' . $this->getroldescripcion();
    }*/

    public function insertar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "INSERT INTO rol(idrol,roldescripcion)  VALUES('" . $this->getidrol() . "','" . $this->getroldescripcion() . "');";
        if ($base->Iniciar()) {
            if ($elid = $base->Ejecutar($sql)) {
                $this->setidrol($elid);
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
        $sql = "UPDATE rol SET roldescripcion='" . $this->getroldescripcion() . "',
        descripcion='" . $this->getroldescripcion() . "'
        WHERE idrol=" . $this->getidrol();
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
        $sql = "DELETE FROM rol WHERE idrol=" . $this->getidrol();
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
        $sql = "SELECT * FROM rol ";
        if ($parametro != "") {
            $sql .= 'WHERE ' . $parametro;
        }
        $res = $base->Ejecutar($sql);
        if ($res > -1) {
            if ($res > 0) {

                while ($row = $base->Registro()) {
                    $obj = new Rol();
                    $obj->setear($row['idrol'], $row['roldescripcion']);
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
        return $this->getroldescripcion();
    }
}
