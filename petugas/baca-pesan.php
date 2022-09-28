<?php
$Page = "Baca Pesan";
require 'includes/sidebar.php';

include '../config/koneksi.php';


if (isset($_GET['id'])) {
    $query = "SELECT * from pesan
              WHERE pesan.id_pesan = '" . $_GET['id'] . "'";
    $result = mysqli_query($koneksi, $query);
    if (!$result) {
        die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    }
    $data = mysqli_fetch_assoc($result);
    // $tgl = date('l, d-m-Y | h:i:sa');

    if (!count($data)) {
        echo "<script>alert('Pesan tidak ditemukan!');window.location='pesan.php';</script>";
    }
} else {
    echo "<script>alert('Pilih Pesan terlebih dahulu!');window.location='pesan.php';</script>";
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <a href="pesan" type="button" class="btn btn-default"><i class="fas fa-arrow-left"></i> Kembali</a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                        <li class="breadcrumb-item"><a href="pesan">Pesan</a></li>
                        <li class="breadcrumb-item active">Baca Pesan</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container">
            <div class="row">
                <!-- /.col -->
                <div class="col-md-12">
                    <div class="card card-primary card-outline">
                        <div class="card-header">
                            <h3 class="card-title">Read Mail</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="mailbox-read-info">
                                <h5><b><?php echo $data['subject']; ?></b></h5>
                                <h6>From: <?php echo $data['email']; ?> (<?php echo $data['nama']; ?>)
                                    <span class="mailbox-read-time float-right"><?php echo $data['tgl_kirim']; ?></span>
                                </h6>
                            </div>
                            <div class="mailbox-read-message">
                                <p><?php echo $data['pesan']; ?></p>

                                <p>Terimaksih,<br><?php echo $data['nama']; ?></p>
                            </div>
                            <!-- /.mailbox-read-message -->
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="button" class="btn btn-default"><i class="fas fa-print"></i> Print</button>
                        </div>
                        <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>

</div>
<!-- /.content-wrapper -->

<?php
require 'includes/footer.php';
?>