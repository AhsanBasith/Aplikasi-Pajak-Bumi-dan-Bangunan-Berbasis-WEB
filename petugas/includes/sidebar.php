<?php
require 'includes/header.php';

include '../config/koneksi.php';


$get1 = mysqli_query($koneksi, "SELECT * FROM kwitansi where keterangan='Belum Lunas'");
$count1 = mysqli_num_rows($get1);

$get2 = mysqli_query($koneksi, "SELECT * FROM pesan");
$count2 = mysqli_num_rows($get2);
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard" class="brand-link">
        <i class="nav-icon fas fa-house-user ml-3" alt="AdminLTE Logo" style="opacity: .8"></i>
        <!-- <img src="../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <span class="brand-text font-weight-bold ml-1" style="font-size: 80%;">Pajak Bumi & Bangunan</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="profil.php" class="d-block"><?= $_SESSION['username'] ?> (<?= $_SESSION['bagian'] ?>)</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <div style="margin-left: 10px;color:grey;font-weight:bold;">Home</div>

                <li class="nav-item">
                    <a href="dashboard" class="nav-link <?php if ($Page == "Dashboard") echo "active"; ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <div style="margin-left: 10px;color:grey;font-weight:bold;">Pajak</div>

                <li class="nav-item">
                    <a href="data-wajib-pajak" class="nav-link <?php if ($Page == "Data Wajib Pajak") echo "active"; ?>">
                        <i class="fas fa-users nav-icon"></i>
                        <p>Data Wajib Pajak</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="data-pajak" class="nav-link <?php if ($Page == "Data Pajak") echo "active"; ?>">
                        <i class="fas fa-house-user nav-icon"></i>
                        <p>Data Pajak</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="kwitansi" class="nav-link <?php if ($Page == "Kwitansi") echo "active"; ?>">
                        <i class=" fas fa-file-invoice nav-icon"></i>
                        <p>Kwitansi</p>
                        <span class="right badge badge-danger"><?= $count1 ?></span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="detail-pajak" class="nav-link <?php if ($Page == "Detail Pajak") echo "active"; ?>">
                        <i class="nav-icon fas fa-paste"></i>
                        <p>
                            Detail Pajak
                        </p>
                    </a>
                </li>

                <div style="margin-left: 10px;color:grey;font-weight:bold;">Pesan</div>

                <li class="nav-item">
                    <a href="pesan" class="nav-link <?php if ($Page == "Pesan") echo "active"; ?>">
                        <i class="nav-icon fas fa-envelope"></i>
                        <p>
                            Pesan
                        </p>
                        <span class="right badge badge-danger"><?= $count2 ?></span>
                    </a>
                </li>

                <div style="margin-left: 10px;color:grey;font-weight:bold;">WEB</div>

                <li class="nav-item">
                    <a href="../index" target="_blank" class="nav-link">
                        <i class="nav-icon fas fa-external-link-alt"></i>
                        <p>
                            Go to Website
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>