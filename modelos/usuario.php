<?php

class usuarios
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


    function getallusuarios()
    {
        $sql = "SELECT * from sql10493032.usuarios";
        return $this->conn->getData($sql);
    }
    function getallusuariosid($id)
    {
        $sql = "SELECT * from sql10493032.usuarios where id = $id";
        return $this->conn->getData($sql);
    }
    function getemailusuariosid($id)
    {
        $sql = "SELECT correohbo, correonetflix, correoprime, correodisney, correostar, correospotify from sql10493032.usuarios where id = $id";
        return $this->conn->getData($sql);
    }
    function getcontrasenausuariosid($id)
    {
        $sql = "SELECT contrasenahbo, contrasenanetflix, contrasenaprime, contrasenadisney, starcontrasena, contrasenaspotify from sql10493032.usuarios where id = $id";
        return $this->conn->getData($sql);
    }
    function getcodusuariosid($id)
    {
        $sql = "SELECT codhbo, codnetflix, codprime, coddisney, codstar, codspotify from sql10493032.usuarios where id = $id";
        return $this->conn->getData($sql);
    }
    function getfechainiciousuariosid($id)
    {
        $sql = "SELECT hbofecha_inicio, netflixfecha_inicio, primefecha_inicio, disneyfecha_inicio, starfecha_inicio, spotifyfecha_inicio from sql10493032.usuarios where id = $id";
        return $this->conn->getData($sql);
    }
    function getfechafinusuariosid($id)
    {
        $sql = "SELECT  hbofecha_fin, netflixfecha_fin, primefecha_fin, disneyfecha_fin, starfecha_fin, spotifyfecha_fin from sql10493032.usuarios where id = $id";
        return $this->conn->getData($sql);
    }
    function insertUsuario($nombre, $celular)
    {
        $sql = "INSERT INTO sql10493032.usuarios (nombre, celular)VALUES('$nombre', $celular);";
        $this->conn->updateData($sql);
        return 1;
    }
    function deleteusuario($id)
    {
        $sql = "DELETE FROM sql10493032.usuarios WHERE id = $id;";
        $this->conn->updateData($sql);
        return 1;
    }
    function updateUsuario(
        $hbocorreo,
        $netflixcorreo,
        $primecorreo,
        $disneycorreo,
        $starcorreo,
        $spotifycorreo,
        $hbocontrasena,
        $netflixcontrasena,
        $primecontrasena,
        $disneycontrasena,
        $starcontrasena,
        $spotifycontrasena,
        $hbocodigo,
        $netflixcodigo,
        $primecodigo,
        $disneycodigo,
        $starcodigo,
        $spotifycodigo,
        $hbofecha_inicio,
        $netflixfecha_inicio,
        $primefecha_inicio,
        $disneyfecha_inicio,
        $starfecha_inicio,
        $spotifyfecha_inicio,
        $hbofecha_fin,
        $netflixfecha_fin,
        $primefecha_fin,
        $disneyfecha_fin,
        $starfecha_fin,
        $spotifyfecha_fin,
        $id,
        $combo,
        $pagado
    ) {
        $sql = "UPDATE sql10493032.usuarios SET  correohbo='$hbocorreo', correonetflix='$netflixcorreo', correoprime='$primecorreo', correodisney='$disneycorreo',
         correostar='$starcorreo', correospotify='$spotifycorreo', contrasenahbo='$hbocontrasena', contrasenanetflix='$netflixcontrasena', contrasenaprime='$primecontrasena', 
         contrasenadisney='$disneycontrasena  ', starcontrasena='$starcontrasena', contrasenaspotify='$spotifycontrasena', codhbo='$hbocodigo', codnetflix='$netflixcodigo',
          codprime='$primecodigo', coddisney='$disneycodigo', codstar='$starcodigo', codspotify='$spotifycodigo', hbofecha_inicio='$hbofecha_inicio', netflixfecha_inicio='$netflixfecha_inicio',
           primefecha_inicio='$primefecha_inicio', disneyfecha_inicio='$disneyfecha_inicio', starfecha_inicio='$starfecha_inicio', spotifyfecha_inicio='$spotifyfecha_inicio',
            hbofecha_fin='$hbofecha_fin', netflixfecha_fin='$netflixfecha_fin', primefecha_fin='$primefecha_fin', disneyfecha_fin='$disneyfecha_fin', starfecha_fin='$starfecha_fin', spotifyfecha_fin='$spotifyfecha_fin', combo = '$combo', pagado = '$pagado' WHERE id=$id;
        ";

        $this->conn->updateData($sql);
    }

    function updategasto($usuarios)
    {
        $sql = "UPDATE administradores  set dinero_gastado = (select sum(valor) from dinero_gastado where usuario = '$usuarios' ) where nombre = '$usuarios'";
        $this->conn->updateData($sql);
        return 1;
    }
    function updateinvertido($usuarios)
    {
        $sql = "UPDATE administradores  set dinero_invertido = (select sum(valor) from dinero_invertido where usuario = '$usuarios' ) where nombre = '$usuarios'";
        $this->conn->updateData($sql);
        return 1;
    }
}
