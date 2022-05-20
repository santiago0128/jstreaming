<?php

require_once "../modelos/plataformas.php";
require_once "../modelos/cuentas.php";
$objplataformas = new plataformas;
$objcuentas = new cuentas;
$plataformas = $objplataformas->getallplataformas();
$cuentas = $objcuentas->getallcuentas();


?>
<!DOCTYPE html>
<html lang="en">

<?php if (is_file('menu/header.php')) {
    require_once "menu/header.php";
} else {
    require_once "../menu/header.php";
}
?>

<body>
<?php require_once "../menu/menu.php" ?>
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
            <br>
            <h1>Agregar Cuenta</h1>
            <br>
            <form action="../controller/cuentacontroller.php" method="POST">
                <div class="mb-3">
                    <label>Cuenta</label>
                    <input class="form-control" type="email" name="cuenta" id="cuenta">
                </div>
                <div class="mb-3">
                    <label>Contraseña</label>
                    <input class="form-control" type="text" name="contrasena" id="contrasena">
                </div>
                <div class="mb-3">
                    <label>Plataforma</label>
                    <select class="form-select" name="plataforma" id="plataforma">
                        <option value="0">Seleccione</option>
                        <?php foreach ($plataformas as $key) { ?>
                            <option value="<?php echo $key['nombre'] ?>"><?php echo $key['nombre'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Fecha Creacion</label>
                    <input class="form-control" type="date" name="fecha_creacion" id="fecha_creacion">
                </div>
                <div class="mb-3">
                    <label>Fecha vence</label>
                    <input class="form-control" type="date" name="fecha_vence" id="fecha_vence">
                </div>
                <input type="hidden" name="addcuenta">
                <input type="submit" class="btn btn-success" value="Agregar cuenta">
            </form>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="../lib/chart/chart.min.js"></script>
<script src="../lib/easing/easing.min.js"></script>
<script src="../lib/waypoints/waypoints.min.js"></script>
<script src="../lib/owlcarousel/owl.carousel.min.js"></script>
<script src="../lib/tempusdominus/js/moment.min.js"></script>
<script src="../lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="../lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="../js/main.js"></script>

</html>