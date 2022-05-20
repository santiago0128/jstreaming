<?php
require_once "../modelos/cuentas.php";

$objetocuentas = new cuentas;



if (isset($_POST['addcuenta'])) {
  
    $nombre = $_POST['cuenta'];
    $contrasena = $_POST['contrasena'];
    $plataforma = $_POST['plataforma'];
    $fecha_creacion = $_POST['fecha_creacion'];
    $fecha_vence = $_POST['fecha_vence'];
    $cuentas = $objetocuentas->insertarcuentas($nombre,$contrasena,$plataforma,$fecha_creacion,$fecha_vence);

    header("Location: ../views/cuentas.php");
   
}