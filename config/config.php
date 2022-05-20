<?php

class conexion
{

    function __construct()
    {
        $this->conn = new mysqli('sql10.freesqldatabase.com', 'sql10493032', 'm9Cu5VTQXJ', 'sql10493032');
        $this->conn->connect('sql10.freesqldatabase.com', 'sql10493032', 'm9Cu5VTQXJ', 'sql10493032');
        $this->conn = mysqli_connect('sql10.freesqldatabase.com', 'sql10493032', 'm9Cu5VTQXJ', 'sql10493032');
    }


    function closeConnection()
    {
        $this->conn->close();
    }



    //Mediante el método connect
    public function getData($sql){  
        try{  
            if( $this->conn === false ) {
                 die( print_r( mysqli_error($this->conn), true));
            }
            $res_array = array();
            $stmt = mysqli_query($this->conn, $sql);

            if( $stmt === false) {
                die( print_r( mysqli_error($this->conn), true) );
            }

            for ($count=0 ; $row = mysqli_fetch_array($stmt); $count++)
            $res_array[$count]=$row;

            return $res_array ;

            $this->closeConnection($stmt);
        }catch(Exception $e){  
            echo("Error!");  
        }  
    }


    public function updateData($sql){  
        try{  
            if( $this->conn === false ) {
                 die( print_r(mysqli_error($this->conn), true));
            }
            $stmt =  mysqli_query($this->conn, $sql);
            
            if( $stmt === false) {
                die( print_r(mysqli_error($this->conn), true) );
            }

            $this->conn->close();
        }catch(Exception $e){  
            echo("Error!");  
        }  
    }
 
}