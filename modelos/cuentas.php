<?php

class cuentas
{

   
    private $id;
    private $cuenta;
    private $contraseña;
    private $fecha_creacion;
    private $fecha_vence;
   
   


    // Conexión
    private $conn;

    // Metodos
    public function __construct()
    {
        if (is_file('config/config.php')) {
            require_once "config/config.php";
        } else {
            require_once "../config/config.php";
        }
        $this->conn = new Conexion();
    }

    public function set($atributo, $contenido)
    {
        $this->$atributo = $contenido;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }


    function getallcuentas()
    {
        $sql = "SELECT * from cuentas order by id desc ";
        return $this->conn->getData($sql);
    }
    function insertarcuentas($nombre,$contrasena,$plataforma,$fecha_creacion,$fecha_vence)
    {
        $sql = "INSERT INTO sql10493032.cuentas (cuenta, contrasena, fecha_creacion, fecha_vence, plataforma) VALUES('$nombre', '$contrasena', '$fecha_creacion', '$fecha_vence', '$plataforma ');";
        return $this->conn->updateData($sql);
    }
   
}
