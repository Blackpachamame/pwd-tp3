<?php
class Persona
{
    private $NroDni;
    private $Apellido;
    private $Nombre;
    private $fechaNac;
    private $Telefono;
    private $Domicilio;
    private $arrayautos;


    public function __construct()
    {

        $this->NroDni = "";
        $this->Apellido = "";
        $this->Nombre = "";
        $this->fechaNac = "";
        $this->Telefono = "";
        $this->Domicilio = "";
        $this->arrayautos= array();
    }
    public function setear($NroDni, $Apellido, $Nombre, $fechaNac, $Telefono, $Domicilio)
    {
        $this->setNroDni($NroDni);
        $this->setApellido($Apellido);
        $this->setNombre($Nombre);
        $this->setfechaNac($fechaNac);
        $this->setTelefono($Telefono);
        $this->setDomicilio($Domicilio);
        //$this->setArrayAutos();
    }


/**
     * permite buscar un objeto
     * @return String
     */
    public function getNroDni()
    {
        return $this->NroDni;
    }
    public function setNroDni($valor)
    {
        $this->NroDni = $valor;
    }

    public function getApellido()
    {
        return $this->Apellido;
    }
    public function setApellido($valor)
    {
        $this->Apellido = $valor;
    }
    public function getNombre()
    {
        return $this->Nombre;
    }
    public function setNombre($valor)
    {
        $this->Nombre = $valor;
    }
    public function getfechaNac()
    {
        return $this->fechaNac;
    }
    public function setfechaNac($valor)
    {
        $this->fechaNac = $valor;
    }
    public function getTelefono()
    {
        return $this->Telefono;
    }
    public function setTelefono($valor)
    {
        $this->Telefono = $valor;
    }
    public function getDomicilio()
    {
        return $this->Domicilio;
    }
    public function setDomicilio($valor)
    {
        $this->Domicilio = $valor;
    }
    public function getmensajeoperacion()
    {
        return $this->mensajeoperacion;
    }
    public function setmensajeoperacion($valor)
    {
        $this->mensajeoperacion = $valor;
    }
    public function getArrayAutos()
    {
        $arr = array();
        $condicion = "Duenio='". $this->getNroDni()."'";
        $objAuto = new Auto();
        $colAutos = $objAuto->listar($condicion); 
        foreach ($colAutos as $auto) {
            array_push($arr, $auto);
        }
        return $arr;
    }
    public function setArrayAutos($valor)
    {
        $this->arrayautos= $valor;
    }




    public function cargar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM persona WHERE NroDni = " . $this->getNroDni();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    $row = $base->Registro();
                    $this->setear($row['NroDni'], $row['Apellido'], $row['Nombre'], $row['fechaNac'], $row['Telefono'], $row['Domicilio']);
                    
                }
            }
        } else {
            $this->setmensajeoperacion("Tabla->listar: " . $base->getError());
        }
        return $resp;
    }
    public function MostrarNombreyApellido()
    {
        return $this->getNombre() . ' ' . $this->getApellido();
    }

    public function insertar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "INSERT INTO persona(NroDni,Apellido,Nombre,fechaNac,Telefono,Domicilio)  VALUES('" . $this->getNroDni() . "','" . $this->getApellido() . "','" . $this->getNombre() . "','" . $this->getfechaNac() . "','" . $this->getTelefono() . "','" . $this->getDomicilio() . "');";
        if ($base->Iniciar()) {
            if ($elid = $base->Ejecutar($sql)) {
                $this->setNroDni($elid);
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
        $sql = "UPDATE persona SET Apellido='" . $this->getApellido() . "',
        Nombre='" . $this->getNombre() . "',
        fechaNac='" . $this->getfechaNac() . "',
        Telefono='" . $this->getTelefono() . "',
        Domicilio='" . $this->getDomicilio() . "'
        WHERE NroDni=" . $this->getNroDni();
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
        $sql = "DELETE FROM persona WHERE DniNro=" . $this->getNroDni();
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
                    $obj->setear($row['NroDni'], $row['Apellido'], $row['Nombre'], $row['fechaNac'], $row['Telefono'], $row['Domicilio']);
                    $arrayautos = $obj->getArrayAutos();
                    $obj->setArrayAutos($arrayautos);  

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
        return $this->getNombre() . ' ' . $this->getApellido();
    }
}
