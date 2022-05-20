<div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>
<!-- Spinner End -->


<!-- Sidebar Start -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>JStreaming</h3>
        </a>
        <div class="navbar-nav w-100">
            <?php
            if (is_file('index.php')) {
              echo '<a href="index.php" class="nav-item nav-link active"><i class="fa fa-user me-2"></i>Clientes</a>';
            } else {
              echo '<a href="../index.php" class="nav-item nav-link active"><i class="fa fa-user me-2"></i>Clientes</a>';
            }
            ?>
            <?php
            if (is_file('views/cuentas.php')) {
              echo '<a href="views/cuentas.php" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Cuentas</a>';
            } else {
              echo '<a href="../views/cuentas.php"  class="nav-item nav-link"><i class="fa fa-th me-2"></i>Cuentas</a>';
            }
            ?>
            <?php
            if (is_file('views/ingresos.php')) {
              echo '<a href="views/ingresos.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Ingresos</a>';
            } else {
              echo '<a href="../views/ingresos.php" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Ingresos</a>';
            }
            ?>
        </div>
    </nav>
</div>
<div class="content">