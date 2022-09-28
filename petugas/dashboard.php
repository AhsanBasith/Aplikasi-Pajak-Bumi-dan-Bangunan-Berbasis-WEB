<?php
$Page = "Dashboard";
require 'includes/sidebar.php';

include '../config/koneksi.php';

$get1 = mysqli_query($koneksi, "SELECT * FROM objek_pajak");
$count1 = mysqli_num_rows($get1);

$get2 = mysqli_query($koneksi, "SELECT * FROM pesan");
$count2 = mysqli_num_rows($get2);

$get3 = mysqli_query($koneksi, "SELECT objek_pajak.*, kwitansi.*, data_wp.* FROM kwitansi 
                                LEFT JOIN objek_pajak ON objek_pajak.id_op = kwitansi.id_op
                                LEFT JOIN data_wp ON data_wp.id_wp = kwitansi.id_wp");
$count3 = mysqli_num_rows($get3);

$get4 = mysqli_query($koneksi, "SELECT * FROM data_wp");
$count4 = mysqli_num_rows($get4);
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Home</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3><?= $count4 ?></h3>

                            <p>Data Wajib Pajak</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="data-wajib-pajak" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?= $count1 ?></h3>

                            <p>Data Pajak</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-house-user"></i>
                        </div>
                        <a href="data-pajak" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-secondary">
                        <div class="inner">
                            <h3><?= $count3 ?></h3>
                            <p>Detail Pajak</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user"></i>
                        </div>
                        <a href="detail-pajak" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?= $count2 ?></h3>

                            <p>Pesan</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <a href="pesan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->


            </div>
        </div>
    </section>
</div>
<!-- /.content-wrapper -->

<?php
require 'includes/footer.php';
?>