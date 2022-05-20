<?php

class plataformas
{

   
    private $id;
    private $nombre;
   
   


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


    function getallplataformas()
    {
        $sql = "SELECT * from plataformas";
        return $this->conn->getData($sql);
    }
    function getallplataformasid($id)
    {
        $sql = "SELECT * from plataformas where id = $id";
        return $this->conn->getData($sql);
    }
}
