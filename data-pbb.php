<?php
include 'config/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">

    <script src="assets/dist/js/savenoreload.js"></script>
</head>

<body class="hold-transition login-page m-5">

    <!-- /.login-logo -->
    <div class="card card-outline card-primary mt-3 col-lg-5 col-md-5">
        <div class="card-header text-center">
            <h4><b>Objek Pajak</b></h4>

        </div>
        <div class="card-body">
            <form action="keterangan" method="post" class="form-pendaftaran">
                <input type="hidden" name="id_op">
                <div class="row mb-3">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <span>NOP</span>
                        <div class="input-group">
                            <input type="text" name="nop" class="form-control" placeholder="NOP" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <span>Kelas</span>
                        <div class="input-group">
                            <input type="text" name="kelas" class="form-control" placeholder="Kelas" required>
                        </div>
                    </div>
                </div>
                <span>Letak Objek</span>
                <div class="input-group mb-3">
                    <textarea type="text" name="letak_objek" class="form-control" placeholder="Letak Objek" required></textarea>
                </div>
                <div class="row ">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                        <span>Luas Tanah</span>
                        <div class="input-group">
                            <input type="text" name="luas_tanah" class="form-control" placeholder="Luas Tanah" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                        <span>Luas Bangunan</span>
                        <div class="input-group">
                            <input type="text" name="luas_bangunan" class="form-control" placeholder="Luas Bangunan" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                        <span>Harga Tanah</span>
                        <div class="input-group">
                            <input type="text" class="form-control" name="harga_tanah" placeholder="Harga Tanah" required>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-12 mb-3">
                        <span>Harga Bangunan</span>
                        <div class="input-group">
                            <input type="text" class="form-control" name="harga_bangunan" placeholder="Harga Bangunan" required>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-primary btn-block tombol-simpan" name="simpan" value="Simpan">
                <input type="hidden" name="id_wp" value="<?= $_POST['id_wp']; ?>">
                <input type="hidden" name="npwp" value="<?= $_POST['npwp']; ?>">
                <input type="hidden" name="nama_lengkap" value="<?= $_POST['nama_lengkap']; ?>">
                <input type="hidden" name="alamat" value="<?= $_POST['alamat']; ?>">
                <input type="hidden" name="rtrw" value="<?= $_POST['rtrw']; ?>">
                <input type="hidden" name="gender" value="<?= $_POST['gender']; ?>">
                <input type="hidden" name="pekerjaan" value="<?= $_POST['pekerjaan']; ?>">
            </form>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->


    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.min.js"></script>
</body>

</html>