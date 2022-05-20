<?php

require_once "../modelos/usuario.php";
require_once "../modelos/plataformas.php";

$objetousuarios = new usuarios;
$objetoplataformas = new plataformas;
$usuarios = $objetousuarios->getallusuarios();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>

<body>
    <br>
    <div class="container">
        <div class="main-content">
            <div class="container-fluid ">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-2">
                        <a class="btn btn-success" href="../index.php">Inicio</a>
                    </div>
                </div>
                <br>
                <br>
                <table id="informes" class="table">
                    <thead>
                        <tr>
                            <th>Nombre Completo</th>
                            <th>Celular</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < count($usuarios); $i++) {  ?>
                            <tr>
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
</body>
<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
        $('#informes').DataTable();
    });
</script>

</html>