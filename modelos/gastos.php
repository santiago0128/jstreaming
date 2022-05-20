<?php

class gastos
{



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

    function updategasto($celular)
    {
        $sql = "INSERT INTO sql10493032.usuarios (nombre, celular)VALUES('santiago', 31322565);";
        $this->conn->updateData($sql);
         return 1;
    }
   
}
