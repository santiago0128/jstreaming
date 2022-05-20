<?php

require_once "../modelos/usuario.php";
require_once "../modelos/administradores.php";

$objetousuarios = new usuarios;
$objetoadmin = new administracion;
$usuarios = $objetousuarios->getallusuarios();
$administradores = $objetoadmin->getalladmin();


foreach ($usuarios as $key) {
    $array[] = $key['pagado'];
}

foreach ($administradores as $key) {
    $arrayadmin[] = $key['dinero_gastado'];
    $dinero_invertido[] = $key['dinero_invertido'];
    $nombre_admin[] = $key['nombre'];
}

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
    <br>
    <div class="container-fluid pt-4 px-4">
        <div class="bg-secondary text-center rounded p-4">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                    <a class="btn btn-success" href="addgasto.php">Agregar Gasto</a>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                    <a class="btn btn-success" href="addinversion.php">Agregar Inversion</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <h3>Dinero Ingresado</h3>
                    <div class="table-responsive">
                        <table id="dinero" class="table  mb-0">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre Completo</th>
                                    <th>Pagado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < count($usuarios); $i++) {  ?>
                                    <tr style="background-color: #191C24 ;">
                                        <td><?php echo $usuarios[$i]['id'] ?></td>
                                        <td><?php echo $usuarios[$i]['nombre'] ?></td>
                                        <td><?php echo "$" . $usuarios[$i]['pagado'] ?></td>

                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <h3>Dinero Gastado</h3>
                    <div class="table-responsive">
                        <table id="tabla_gastos" class="table  mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre Completo</th>
                                    <th>Gastado</th>
                                    <th>Ver</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < count($administradores); $i++) {  ?>
                                    <tr style="background-color: #191C24 ;">
                                        <td><?php echo $administradores[$i]['id'] ?></td>
                                        <td id="gastos_nombre"><?php echo $administradores[$i]['nombre'] ?></td>
                                        <td><?php echo $administradores[$i]['dinero_gastado'] ?></td>
                                        <td><a class="btn btn-primary" href="../controller/admincontroller.php?ver=<?php echo $administradores[$i]['id'] ?>">VER</a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="table-responsive">
                        <table id="tabla_gastos_total" class="table  mb-0">
                            <thead>
                                <tr>
                                    <th>Total</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr style="background-color: #191C24 ;">
                                    <td><?php echo intval(array_sum($arrayadmin)) ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <h3>Dinero Invertido</h3>
                    <div class="table-responsive">
                        <table id="tabla_invertido" class="table  mb-0">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre Completo</th>
                                    <th>Gastado</th>
                                    <th>Ver</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < count($administradores); $i++) {  ?>
                                    <tr style="background-color: #191C24 ;">
                                        <td><?php echo $administradores[$i]['id'] ?></td>
                                        <td><?php echo $administradores[$i]['nombre'] ?></td>
                                        <td><?php echo $administradores[$i]['dinero_invertido'] ?></td>
                                        <td><a class="btn btn-primary" href="../controller/admincontroller.php?verinvertido=<?php echo $administradores[$i]['id'] ?>">VER</a></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="table-responsive">
                        <table class="table  mb-0">
                            <thead>
                                <tr>
                                    <th>Total</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr style="background-color: #191C24 ;">
                                    <td><?php echo intval(array_sum($array)) ?></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="table-responsive">
                        <table class="table  mb-0">
                            <thead>
                                <tr>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="background-color: #191C24 ;">
                                    <td><?php echo intval(array_sum($dinero_invertido)) ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        &nbsp;
        &nbsp;
    </div>
    <div class="row">
        <div class="col">
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="table-responsive">
                        <table class="table  mb-0">
                            <thead>
                                <tr>
                                    <th>Total Ganacias</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr style="background-color: #191C24 ;">
                                    <td><?php echo intval(array_sum($array)-array_sum($array)) ?></td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="table-responsive">
                        <table class="table  mb-0">
                            <thead>
                                <tr>
                                    <th>Dinero Restante</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr style="background-color: #191C24 ;">
                                    <td><?php echo intval(array_sum($dinero_invertido)) ?></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        &nbsp;
        &nbsp;
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
<script src="../js/ajax.js"></script>
<script>
    $(document).ready(function() {
        $('#dinero').DataTable({
            "pageLength": 11
        });
    });
</script>

</html>