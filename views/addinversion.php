<?php


require_once "../modelos/usuario.php";
require_once "../modelos/administradores.php";

$objetousuarios = new usuarios;
$objetoadmin = new administracion;
$usuarios = $objetousuarios->getallusuarios();
$administradores = $objetoadmin->getalladmin();


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
            <h1>Agregar Inversion</h1>
            <br>
            <form action="../controller/admincontroller.php" method="POST">
                <div class="mb-3">
                    <label>usuarios</label>
                    <select name="usuario" class="form-select"  id="usuario">
                        <option value="0">Seleccione</option>
                        <?php for ($i = 0; $i < count($administradores); $i++) {  ?>
                            <option value="<?php echo $administradores[$i]['nombre'] ?>"><?php echo $administradores[$i]['nombre'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label>Valor</label>
                    <input class="form-control" type="number" name="valor" id="valor">
                </div>
                <div class="mb-3">
                    <label>Fecha</label>
                    <input class="form-control" type="date" name="fecha" id="fecha">
                </div>
                <div class="mb-3">
                    <label>Descripcion</label>
                    <textarea class="form-control" name="descripcion" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="mb-3">

                    <input type="hidden" name="addinversion">
                    <input type="submit" class="btn btn-success" value="Agregar">
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