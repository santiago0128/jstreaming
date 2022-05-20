<?php

class administracion
{


    private $nombre;
    private $celular;
    private $plataforma;
    private $cuentas;
    private $perfil;
    private $usuario;
    private $cod;


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


    function getalladmin()
    {
        $sql = "SELECT * from sql10493032.administradores";
        return $this->conn->getData($sql);
    }
    function getadminid($id)
    {
        $sql = "SELECT * from sql10493032.administradores where id = $id";
        return $this->conn->getData($sql);
    }
    function getalldinerogastado()
    {
        $sql = "SELECT * from sql10493032.dinero_gastado";
        return $this->conn->getData($sql);
    }
    function getdinerogastadoid($nombre)
    {
        $sql = "SELECT * from sql10493032.dinero_gastado where usuario = '$nombre'";
        return $this->conn->getData($sql);
    }
    function getdineroinvertidoid($nombre)
    {
        $sql = "SELECT * from sql10493032.dinero_invertido where usuario = '$nombre'";
        return $this->conn->getData($sql);
    }
    function insertgasto($usuario,$valor,$fecha,$descripcion)
    {
        $sql = "INSERT INTO sql10493032.dinero_invertido (usuario, valor, fecha, descripcion)VALUES('$usuario', '$valor', '$fecha', '$descripcion');";
        $this->conn->updateData($sql);
        return 1;

    }
    function insertinversion($usuario,$valor,$fecha,$descripcion)
    {
        $sql = "INSERT INTO sql10493032.dinero_invertido (usuario, valor, fecha, descripcion)VALUES('$usuario', '$valor', '$fecha', '$descripcion');";
        return $this->conn->updateData($sql);
    }

    function updategasto($usuario)
    {
        $sql = "UPDATE administradores  set dinero_gastado = (select sum(valor) from dinero_gastado where usuario = '$usuario' ) where nombre = '$usuario'";
        $this->conn->updateData($sql);
    }
   
}
