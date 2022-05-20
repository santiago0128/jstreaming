<?php
require_once "../modelos/combos.php";
require_once "../modelos/plataformas.php";
$objcombos = new combos;
$objplataformas = new plataformas;
$plataformas = $objplataformas->getallplataformas();
$combos = $objcombos->getallcombos();

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
    <br>
    <?php require_once "../menu/menu.php" ?>
    <div class="main-content">
        <div class="container-fluid ">
            <br>
            <div class="card bg-secondary ">
                <div class="card-body">
                    <form method="POST" action="<?php $_SERVER["PHP_SELF"] ?>">
                        <div class="row">
                            <div class="col">
                                <h5 class="heading-small text-muted mb-4"> informacion</h5>
                            </div>
                            <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                                <a class="btn btn-danger" href="<?php $_SERVER["PHP_SELF"] ?>?eliminar=<?php echo $_GET['ver'] ?>">Eliminar</a>
                            </div>
                        </div>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-username">Usuario</label>
                                        <input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="<?php echo $usuario[0]['nombre'] ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-email">Celular</label>
                                        <input type="text" id="input-email" class="form-control form-control-alternative" value="<?php echo $usuario[0]['celular'] ?>">
                                    </div>
                                </div>
                            </div>
                            &nbsp;
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-username">Combos</label>
                                        <select class="form-select" name="combo" id="combo">
                                            <option value="0">Seleccione</option>
                                            <?php foreach ($combos as $key) {?>
                                                <option value="<?php echo $key['nombre'] ?>"><?php echo $key['nombre'] ?></option>
                                           <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="input-username">Pagado</label>
                                        <input type="text" id="pagado" name="pagado" class="form-control form-control-alternative" value="<?php
                                        if(!empty($usuario[0]['pagado']))
                                        echo $usuario[0]['pagado'];
                                        else
                                        echo 0;
                                        ?>" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <h5>Plataformas:</h5>

                                        <?php for ($i = 0; $i < count($plataformas); $i++) { ?>

                                            <div class="row">
                                                <div class="col">
                                                    <div style="padding-top: 20px;">
                                                        <!-- <input type="checkbox" id="<?php echo $plataformas[$i]['id'] ?>" name="plataforma[]" multiple value="<?php echo $plataformas[$i]['id'] ?>"> -->
                                                        <label for="html"><?php echo $plataformas[$i]['nombre'] ?></label><br>
                                                    </div>
                                                </div>
                                                <div class="col">

                                                    <label for="">Email</label>
                                                    <input type="email" class="form-control" multiple name="correo[]" id="correo[]" value="<?php if (!empty($email)) {
                                                                                                                                                echo $email[$i];
                                                                                                                                            } else {
                                                                                                                                                echo "";
                                                                                                                                            } ?>">

                                                </div>
                                                <div class="col">
                                                    <label for="">Contraseña</label>
                                                    <input type="text" class="form-control" multiple name="contrasena[]" id="contrasena[]" value="<?php if (!empty($contrasena)) {
                                                                                                                                                        echo $contrasena[$i];
                                                                                                                                                    } else {
                                                                                                                                                        echo "";
                                                                                                                                                    } ?>">
                                                </div>
                                                <div class="col">
                                                    <label for="">Codigo</label>
                                                    <input type="text" class="form-control" multiple name="codigo[]" id="codigo[]" value="<?php if (!empty($cod)) {
                                                                                                                                                echo $cod[$i];
                                                                                                                                            } else {
                                                                                                                                                echo "";
                                                                                                                                            } ?>">
                                                </div>
                                                <div class="col">
                                                    <label for="">Fecha Incio</label>
                                                    <input type="date" class="form-control" multiple name="fecha_inicio[]" id="fecha_inicio[]" value="<?php if (!empty($fecha_inicio)) {
                                                                                                                                                            echo $fecha_inicio[$i];
                                                                                                                                                        } else {
                                                                                                                                                            echo "";
                                                                                                                                                        } ?>">
                                                </div>
                                                <div class="col">
                                                    <label for="">Fecha Fin</label>
                                                    <input type="date" class="form-control" multiple name="fecha_fin[]" id="fecha_fin[]" value="<?php if (!empty($fecha_fin)) {
                                                                                                                                                    echo $fecha_fin[$i];
                                                                                                                                                } else {
                                                                                                                                                    echo "";
                                                                                                                                                } ?>">
                                                </div>
                                            </div>

                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <input type="hidden" value="<?php echo $_GET['ver'] ?>" name="id" id="id">
                        <input type="hidden" name="guardar_usuario">
                        <input type="submit" class="btn btn-success" value="Guardar">
                    </form>
                </div>
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