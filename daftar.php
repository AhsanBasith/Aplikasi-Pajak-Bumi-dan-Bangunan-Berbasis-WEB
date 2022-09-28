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

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <h4><b>Data Diri</b></h4>
                <p>Daftarkan pajak bumi dan bangunan anda!</p>
            </div>
            <div class="card-body">
                <form action="data-pbb" method="POST" class="form-pendaftaran">
                    <input type="hidden" name="id_wp">
                    <div class="input-group mb-3">
                        <input type="text" name="npwp" class="form-control" placeholder="NPWP" required>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="input-group mb-3">
                        <textarea class="form-control" name="alamat" placeholder="Alamat" style="height: 100px;" required></textarea>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="rtrw" class="form-control" placeholder="RT/RW" required>
                    </div>
                    <div class="input-group mb-3">
                        <select class="form-control" name="gender" required>
                            <option>--Jenis Kelamin--</option>
                            <option value="Laki-Laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="input-group mb-3">
                        <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" required>
                    </div>
                    <input type="submit" class="btn btn-primary btn-block tombol-simpan" name="selanjutnya" value="Selanjutnya">
                    <a href="index" class="btn btn-success btn-block tombol-simpan">Home</a>

                </form>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="assets/dist/js/adminlte.min.js"></script>
</body>

</html>