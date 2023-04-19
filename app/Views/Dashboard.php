<?php
// Cek apakah pengguna sudah login
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: ../Auth/Login.php');
    exit;
}
include '../../database/config.php';
include '../Models/Branch_Manager/Add_User.php';
include 'Branch_Manager/Modal_Add_User.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bank | Digital</title>
    <?php include 'css.php';  ?>
</head>


<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Models/Auth/Logout.php">
                        <i class="fas fa-door-open"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="" class="brand-link">
                <span class="brand-text font-weight-light">
                    <?php echo "Level akses: " . $_SESSION['user_level'] . "<br>"; ?>
                </span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="#" class="d-block">
                            <?php echo "Selamat datang, " . $_SESSION['user_name'] . "!<br>"; ?>
                        </a>
                    </div>
                </div>
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <?php
                        // Tampilkan fitur-fitur yang dapat diakses oleh level akses masing-masing
                        if ($_SESSION['user_level'] == 'Manager') {
                            echo '<li class="nav-item';
                            if ($_GET['page'] == 'bm' || !isset($_GET['page'])) {
                                echo ' active';
                            }
                            echo '">
                            <a href="Dashboard.php?page=bm" class="nav-link';
                            if ($_GET['page'] == 'bm' || !isset($_GET['page'])) {
                                echo ' active';
                            }
                            echo '">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                            </a>
                            </li>';

                            echo '<li class="nav-item';
                            if ($_GET['page'] == 'Hak_Akses') {
                                echo ' active';
                            }
                            echo '">
                            <a href="Dashboard.php?page=Hak_Akses" class="nav-link';
                            if ($_GET['page'] == 'Hak_Akses') {
                                echo ' active';
                            }
                            echo '">
                            <i class="nav-icon fas fa-user-alt"></i>
                            <p>Hak Akses</p>
                            </a>
                            </li>';
                        } else if ($_SESSION['user_level'] == 'Admin') {
                            echo "Fitur Admin<br>";
                        } else if ($_SESSION['user_level'] == 'Teller') {
                            echo '<li class="nav-item';
                            if ($_GET['page'] == 'Teller' || !isset($_GET['page'])) {
                                echo ' active';
                            }
                            echo '">
                            <a href="Dashboard.php?page=Teller" class="nav-link';
                            if ($_GET['page'] == 'Teller' || !isset($_GET['page'])) {
                                echo ' active';
                            }
                            echo '">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                            </a>
                            </li>';

                            echo '<li class="nav-item';
                            if ($_GET['page'] == 'Tabungan') {
                                echo ' active';
                            }
                            echo '">
                            <a href="Dashboard.php?page=Tabungan" class="nav-link';
                            if ($_GET['page'] == 'Tabungan') {
                                echo ' active';
                            }
                            echo '">
                            <i class="nav-icon fas fa-money-bill-alt"></i>
                            <p>Tabungan</p>
                            </a>
                            </li>';
                        } else if ($_SESSION['user_level'] == 'CS') {
                            echo '<li class="nav-item';
                            if ($_GET['page'] == 'cs' || !isset($_GET['page'])) {
                                echo ' active';
                            }
                            echo '">
                            <a href="Dashboard.php?page=cs" class="nav-link';
                            if ($_GET['page'] == 'cs' || !isset($_GET['page'])) {
                                echo ' active';
                            }
                            echo '">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                            </a>
                            </li>';

                            echo '<li class="nav-item';
                            if ($_GET['page'] == 'Simpanan') {
                                echo ' active';
                            }
                            echo '">
                            <a href="Dashboard.php?page=Simpanan" class="nav-link';
                            if ($_GET['page'] == 'Simpanan') {
                                echo ' active';
                            }
                            echo '">
                            <i class="nav-icon fas fa-money-bill-alt"></i>
                            <p>Simpanan</p>
                            </a>
                            </li>';
                        } else if ($_SESSION['user_level'] == 'Marketing') {
                            echo '<li class="nav-item';
                            if ($_GET['page'] == 'Marketing' || !isset($_GET['page'])) {
                                echo ' active';
                            }
                            echo '">
                            <a href="Dashboard.php?page=Marketing" class="nav-link';
                            if ($_GET['page'] == 'Marketing' || !isset($_GET['page'])) {
                                echo ' active';
                            }
                            echo '">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>Dashboard</p>
                            </a>
                            </li>';

                            echo '<li class="nav-item';
                            if ($_GET['page'] == 'Produk_Simpanan') {
                                echo ' active';
                            }
                            echo '">
                            <a href="Dashboard.php?page=Produk_Simpanan" class="nav-link';
                            if ($_GET['page'] == 'Produk_Simpanan') {
                                echo ' active';
                            }
                            echo '">
                            <i class="nav-icon fas fa-money-bill-alt"></i>
                            <p>Simpanan</p>
                            </a>
                            </li>';

                            echo '<li class="nav-item';
                            if ($_GET['page'] == 'Produk_SimpananBerjangka') {
                                echo ' active';
                            }
                            echo '">
                            <a href="Dashboard.php?page=Produk_SimpananBerjangka" class="nav-link';
                            if ($_GET['page'] == 'Produk_SimpananBerjangka') {
                                echo ' active';
                            }
                            echo '">
                            <i class="nav-icon fas fa-money-check-alt"></i>
                            <p>Simpanan Berjangka</p>
                            </a>
                            </li>';

                            echo '<li class="nav-item';
                            if ($_GET['page'] == 'Produk_Pinjaman') {
                                echo ' active';
                            }
                            echo '">
                            <a href="Dashboard.php?page=Produk_Pinjaman" class="nav-link';
                            if ($_GET['page'] == 'Produk_Pinjaman') {
                                echo ' active';
                            }
                            echo '">
                            <i class="nav-icon fas fa-credit-card"></i>
                            <p>Pinjaman</p>
                            </a>
                            </li>';
                        } else if ($_SESSION['user_level'] == 'Surveyor') {
                            echo "Fitur Surveyor<br>";
                        } else {
                            echo "Fitur Nasabah<br>";
                        }
                        ?>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <div class="content-wrapper">
            <?php include 'Page.php'; ?>
        </div>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <?php include 'js.php'; ?>
    <?php include '../Controllers/Data_Table.php'; ?>
    <?php include '../Controllers/Input.php'; ?>
</body>

</html>