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
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h3 class="mb-0">Gastos Usuario</h3>
            </div>
            <div class="table-responsive">
                <table id="informes" class="table">
                    <thead>
                        <tr>
                            <th>Nombre </th>
                            <th>Valor</th>
                            <th>Fecha</th>
                            <th>Descripcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < count($gastos); $i++) {  ?>
                            <tr>
                                <td><?php echo $gastos[$i]['usuario'] ?></td>
                                <td><?php echo $gastos[$i]['valor'] ?></td>
                                <td><?php echo $gastos[$i]['fecha'] ?></td>
                                <td><?php echo $gastos[$i]['descripcion'] ?></td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
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