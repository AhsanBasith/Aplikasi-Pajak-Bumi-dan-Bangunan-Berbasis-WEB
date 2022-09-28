<?php
$Page = "Profil";
require 'includes/sidebar.php';

include '../config/koneksi.php';

?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Profil</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <div class="offset-lg-4 col-lg-4 col-sm-6 col-12 main-section text-center">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 bg-secondary" style="height: 120px;"></div>
                    </div>
                    <div class="row user-detail">
                        <div class="col-lg-12 col-sm-12 col-12">
                            <img src="../assets/dist/img/user2-160x160.jpg" class="rounded-circle img-thumbnail">
                            <h3>(<?= $_SESSION['bagian'] ?>)</h3>
                            <h5 class="text-bold">Username :</h5> <?= $_SESSION['username'] ?> <sup><a href=""><i class="fas fa-edit"></i></a></sup>
                            <h5 class="text-bold">Email :</h5> <?= $_SESSION['email'] ?> <sup><a href=""><i class="fas fa-edit"></i></a></sup>
                            <h5></h5>
                            <hr>
                            <?= $_SESSION['motto'] ?><sup> <a href=""><i class="fas fa-edit"></i></a></sup>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<!-- /.content-wrapper -->

<?php
require 'includes/footer.php';
?>