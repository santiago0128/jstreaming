<?php

require_once "../modelos/cuentas.php";
require_once "../modelos/plataformas.php";

$objetocuentas = new cuentas;
$objetoplataformas = new plataformas;
$cuentas = $objetocuentas->getallcuentas();

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
    <div class="container-fluid position-relative d-flex p-0">

        <?php require_once "../menu/menu.php" ?>
        <br>
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary text-center rounded p-4">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                        <a class="btn btn-success" href="addcuenta.php">Agregar Cuentas</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Recent Salse</h6>
                    <a href="">Show All</a>
                </div>
                <div class="table-responsive">
                    <table id="myTable" class="table  mb-0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Plataforma</th>
                                <th>Cuenta</th>
                                <th>Contraseña</th>
                                <th>Fecha Creacion</th>
                                <th>Fecha Vence</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i < count($cuentas); $i++) {  ?>
                                <tr style="background-color:  #191C24 ;">
                                    <td><?php echo $cuentas[$i]['id'] ?></td>
                                    <td><?php echo $cuentas[$i]['plataforma'] ?></td>
                                    <td><?php echo $cuentas[$i]['cuenta'] ?></td>
                                    <td><?php echo $cuentas[$i]['contrasena'] ?></td>
                                    <td><?php echo $cuentas[$i]['fecha_creacion'] ?></td>
                                    <td><?php echo $cuentas[$i]['fecha_vence'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
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
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>