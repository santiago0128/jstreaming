<?php

require_once "modelos/usuario.php";
require_once "modelos/plataformas.php";

$objetousuarios = new usuarios;
$objetoplataformas = new plataformas;
$usuarios = $objetousuarios->getallusuarios();
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<?php require_once "menu/header.php" ?>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <?php require_once "menu/menu.php" ?>
        <br>
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary text-center rounded p-4">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                        <a class="btn btn-success" href="views/add.php">Agregar Usuario</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary text-center rounded p-4">
                <div class="table-responsive">
                    <table id="myTable" class="table  mb-0">
                        <thead>
                            <tr>
                                <th>Nombre Completo</th>
                                <th>Celular</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i < count($usuarios); $i++) {  ?>
                                <tr style="background-color: #191C24 ;">
                                    <td><?php echo $usuarios[$i]['nombre'] ?></td>
                                    <td><?php echo $usuarios[$i]['celular'] ?></td>
                                    <td><a class="btn btn-primary" href="controller/usuariocontroller.php?ver=<?php echo $usuarios[$i]['id'] ?>">VER</a></td>

                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <?php require_once "menu/footer.php"; ?>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
    </script>
</body>

</html>