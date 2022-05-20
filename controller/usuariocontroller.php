<?php

require_once "../modelos/usuario.php";
$objetousuarios = new usuarios;



if (isset($_POST['addUsu'])) {

    $nombre = $_POST['name'];
    $celular = $_POST['celular'];


    $usuario = $objetousuarios->insertUsuario($nombre, $celular);
    header("Location: ../index.php");
}


if (isset($_GET['ver'])) {
    $id = $_GET['ver'];
    $usuario = $objetousuarios->getallusuariosid($id);
    $email = $objetousuarios->getemailusuariosid($id);
    $contrasena = $objetousuarios->getcontrasenausuariosid($id);
    $cod = $objetousuarios->getcodusuariosid($id);
    $fecha_incio = $objetousuarios->getfechainiciousuariosid($id);
    $fecha_fin = $objetousuarios->getfechafinusuariosid($id);
  //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $correohbo = $email[0]['correohbo'];
    $correonetflix = $email[0]['correonetflix'];
    $correoprime = $email[0]['correoprime'];
    $correodisney = $email[0]['correodisney'];
    $correostar = $email[0]['correostar'];
    $correospotify = $email[0]['correospotify'];
    $email = array ($correohbo,$correonetflix,$correoprime,$correodisney,$correostar,$correospotify);
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $contrasenahbo = $contrasena[0]['contrasenahbo'];
    $contrasenanetflix = $contrasena[0]['contrasenanetflix'];
    $contrasenaprime = $contrasena[0]['contrasenaprime'];
    $contrasenadisney = $contrasena[0]['contrasenadisney'];
    $contrasenastar = $contrasena[0]['starcontrasena'];
    $contrasenaspotify = $contrasena[0]['contrasenaspotify'];
    $contrasena = array ($contrasenahbo,$contrasenanetflix,$contrasenaprime,$contrasenadisney,$contrasenastar,$contrasenaspotify);
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $codhbo =     $cod[0]['codhbo'];
    $codnetflix = $cod[0]['codnetflix'];
    $codprime =   $cod[0]['codprime'];
    $coddisney =  $cod[0]['coddisney'];
    $codstar =    $cod[0]['codstar'];
    $codspotify = $cod[0]['codspotify'];
    $cod = array ($codhbo,$codnetflix,$codprime,$coddisney,$codstar,$codspotify);
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $fecha_iniciohbo =     $fecha_incio[0]['hbofecha_inicio'];
    $fecha_inicionetflix = $fecha_incio[0]['netflixfecha_inicio'];
    $fecha_inicioprime =   $fecha_incio[0]['primefecha_inicio'];
    $fecha_iniciodisney =  $fecha_incio[0]['disneyfecha_inicio'];
    $fecha_iniciostar =    $fecha_incio[0]['starfecha_inicio'];
    $fecha_iniciospotify = $fecha_incio[0]['spotifyfecha_inicio'];
    $fecha_inicio = array ($fecha_iniciohbo,$fecha_inicionetflix,$fecha_inicioprime,$fecha_iniciodisney,$fecha_iniciostar,$fecha_iniciospotify);
    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    $fecha_finhbo =     $fecha_fin[0]['hbofecha_fin'];
    $fecha_finnetflix = $fecha_fin[0]['netflixfecha_fin'];
    $fecha_finprime =   $fecha_fin[0]['primefecha_fin'];
    $fecha_findisney =  $fecha_fin[0]['disneyfecha_fin'];
    $fecha_finstar =    $fecha_fin[0]['starfecha_fin'];
    $fecha_finspotify = $fecha_fin[0]['spotifyfecha_fin'];
    $fecha_fin = array ($fecha_finhbo,$fecha_finnetflix,$fecha_finprime,$fecha_findisney,$fecha_finstar,$fecha_finspotify);

    require_once "../views/profile.php";
}
if (isset($_POST['guardar_usuario'])) {

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];
    $codigo = $_POST['codigo'];
    $fecha_inicio = $_POST['fecha_inicio'];
    $fecha_fin = $_POST['fecha_fin'];

    $id = $_POST['id'];
    $combo = $_POST['combo'];
    $pagado = $_POST['pagado'];

    $hbocorreo = $correo[0];
    $netflixcorreo = $correo[1];
    $primecorreo = $correo[2];
    $disneycorreo = $correo[3];
    $starcorreo = $correo[4];
    $spotifycorreo = $correo[5];

    $hbocontrasena = $contrasena[0];
    $netflixcontrasena = $contrasena[1];
    $primecontrasena = $contrasena[2];
    $disneycontrasena = $contrasena[3];
    $starcontrasena = $contrasena[4];
    $spotifycontrasena = $contrasena[5];

    $hbocodigo = $codigo[0];
    $netflixcodigo = $codigo[1];
    $primecodigo = $codigo[2];
    $disneycodigo = $codigo[3];
    $starcodigo = $codigo[4];
    $spotifycodigo = $codigo[5];

    $hbofecha_inicio = $fecha_inicio[0];
    $netflixfecha_inicio = $fecha_inicio[1];
    $primefecha_inicio = $fecha_inicio[2];
    $disneyfecha_inicio = $fecha_inicio[3];
    $starfecha_inicio = $fecha_inicio[4];
    $spotifyfecha_inicio = $fecha_inicio[5];

    $hbofecha_fin = $fecha_fin[0];
    $netflixfecha_fin = $fecha_fin[1];
    $primefecha_fin = $fecha_fin[2];
    $disneyfecha_fin = $fecha_fin[3];
    $starfecha_fin = $fecha_fin[4];
    $spotifyfecha_fin = $fecha_fin[5];

    $usuario = $objetousuarios->updateUsuario(
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
        $id,$combo,$pagado
    );
}

if (isset($_GET['eliminar'])) {
    
    $id = $_GET['eliminar'];
    $usuario = $objetousuarios->deleteusuario($id);
    header("Location: ../index.php");

}
