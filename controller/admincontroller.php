<?php
require_once "../modelos/administradores.php";
require_once "../modelos/usuario.php";
require_once "../modelos/gastos.php";

$objetoadmin = new administracion;
$objetogasto = new gastos;
$objetousu = new usuarios;



if (isset($_POST['addgasto'])) {

    $usuario = $_POST['usuario'];
    $valor = $_POST['valor'];
    $fecha = $_POST['fecha'];
    $descripcion = $_POST['descripcion'];
    $cuentas = $objetoadmin->insertgasto($usuario, $valor, $fecha, $descripcion);
    $objetousu->updategasto($usuario);
    header("Location: ../views/ingresos.php");
}
if (isset($_POST['addinvertido'])) {

    $usuario = $_POST['usuario'];
    $valor = $_POST['valor'];
    $fecha = $_POST['fecha'];
    $descripcion = $_POST['descripcion'];
    $cuentas = $objetoadmin->insertgasto($usuario, $valor, $fecha, $descripcion);
    $objetousu->updategasto($usuario);
    header("Location: ../views/ingresos.php");
}
if (isset($_GET['ver'])) {

    $id = $_GET['ver'];
    $admin = $objetoadmin->getadminid($id);
    $gastos = $objetoadmin->getdinerogastadoid($admin[0]['nombre']);
    require_once "../views/ingresoadmin.php";
}
if (isset($_GET['verinvertido'])) {

    $id = $_GET['verinvertido'];
    $admin = $objetoadmin->getadminid($id);
    $gastos = $objetoadmin->getdineroinvertidoid($admin[0]['nombre']);
    require_once "../views/inversionadmin.php";
}


