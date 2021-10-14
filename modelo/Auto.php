<?php
class Auto
{
    private $Patente;
    private $Marca;
    private $Modelo;
    private $Duenio;
    private $mensajeoperacion;


    /** CONSTRUCTOR **/
    public function __construct()
    {
        $this->Patente = "";
        $this->Marca = "";
        $this->Modelo = "";
        $this->Duenio = new Persona();
        $this->mensajeoperacion = "";
    }


    /** SETEAR **/
    public function setear($Patente, $Marca, $Modelo, $Duenio)
    {
        $this->setPatente($Patente);
        $this->setMarca($Marca);
        $this->setModelo($Modelo);
        $this->setDuenio($Duenio);
    }


    /** GETS Y SETS **/
    public function getPatente()
    {
        return $this->Patente;
    }

    public function setPatente($valor)
    {
        $this->Patente = $valor;
    }

    public function getMarca()
    {
        return $this->Marca;
    }

    public function setMarca($valor)
    {
        $this->Marca = $valor;
    }

    public function getModelo()
    {
        return $this->Modelo;
    }

    public function setModelo($valor)
    {
        $this->Modelo = $valor;
    }

    public function getDuenio()
    {
        return $this->Duenio;
    }

    public function setDuenio($valor)
    {
        //var_dump($valor);

        $duenio = $this->getDuenio();
        $duenio->setNroDni($valor);
        $this->Duenio = $duenio;
        $this->Duenio->cargar();
    }

    public function getmensajeoperacion()
    {
        return $this->mensajeoperacion;
    }

    public function setmensajeoperacion($valor)
    {
        $this->mensajeoperacion = $valor;
    }


    /** CARGAR **/
    public function cargar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM auto WHERE Patente = " . $this->getPatente();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    $row = $base->Registro();
                    $this->setear($row['Patente'], $row['Marca'], $row['Modelo'], $row['Duenio']);
                }
            }
        } else {
            $this->setmensajeoperacion("Tabla->listar: " . $base->getError());
        }
        return $resp;
    }


    /** INSERTAR **/
    public function insertar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "INSERT INTO auto(Patente,Marca,Modelo,Duenio)  VALUES('" . $this->getPatente() . "','" . $this->getMarca() . "','" . $this->getModelo() . "','" . $this->getDuenio()->getNroDni() . "');";
        if ($base->Iniciar()) {
            if ($elid = $base->Ejecutar($sql)) {
                $this->setPatente($elid);
                $resp = true;
            } else {
                $this->setmensajeoperacion("Tabla->insertar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Tabla->insertar: " . $base->getError());
        }
        return $resp;
    }


    /** MODIFICAR **/
    public function modificar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "UPDATE auto SET Marca='" . $this->getMarca() . "',";
        $sql .= "Modelo=" . $this->getModelo() . ",";
        $sql .= "Duenio='" . $this->getDuenio()->getNroDni() . "' ";
        $sql .= "WHERE Patente='" . $this->getPatente() . "'";
        if ($base->Iniciar()) {
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


    /** ELIMINAR **/
    public function eliminar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "DELETE FROM auto WHERE Patente=" . $this->getPatente();
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


    /** LISTAR **/
    public static function listar($parametro = "")
    {
        $arreglo = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM auto ";
        if ($parametro != "") {
            $sql .= 'WHERE ' . $parametro;
        }
        $res = $base->Ejecutar($sql);
        if ($res > -1) {
            if ($res > 0) {
                while ($row = $base->Registro()) {
                    $obj = new Auto();
                    $persona = new Persona();
                    $persona->setNroDni($row['Duenio']);
                    $persona->cargar();
                    $obj->setear($row['Patente'], $row['Marca'], $row['Modelo'], $row['Duenio']);

                    array_push($arreglo, $obj);
                }
            }
        } else {
            //$this->setmensajeoperacion("Tabla->listar: ".$base->getError());
        }
        return $arreglo;
    }
}
