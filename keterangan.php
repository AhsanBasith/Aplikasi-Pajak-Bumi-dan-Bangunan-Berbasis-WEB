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
                <h4><b>PBB</b></h4>
                <p>Daftarkan pajak bumi dan bangunan anda!</p>
            </div>
            <div class="card-body">
                <?php
                include 'config/koneksi.php';

                if (isset($_POST['simpan'])) {
                    $nop = $_POST['nop'];
                    $letak_objek = $_POST['letak_objek'];
                    $luas_tanah = $_POST['luas_tanah'];
                    $luas_bangunan = $_POST['luas_bangunan'];
                    $harga_tanah = $_POST['harga_tanah'];
                    $harga_bangunan = $_POST['harga_bangunan'];
                    $kelas = $_POST['kelas'];

                    $query1 = "INSERT into objek_pajak (nop,letak_objek,luas_tanah,luas_bangunan,harga_tanah,harga_bangunan,kelas) 
                                values ('$nop','$letak_objek','$luas_tanah','$luas_bangunan','$harga_tanah','$harga_bangunan','$kelas')";
                    $result = mysqli_query($koneksi, $query1);

                    if ($result) {
                        $query2 = "SELECT id_op from objek_pajak order by id_op DESC";
                        $result2 = mysqli_query($koneksi, $query2);
                        $res_op = mysqli_fetch_assoc($result2);

                        $op_id = $res_op['id_op'];

                        $id_wp = $_POST['id_wp'];
                        $npwp = $_POST['npwp'];
                        $nama_lengkap = $_POST['nama_lengkap'];
                        $alamat = $_POST['alamat'];
                        $rtrw = $_POST['rtrw'];
                        $gender = $_POST['gender'];
                        $pekerjaan = $_POST['pekerjaan'];

                        $query3 = "INSERT into data_wp (id_wp,npwp,id_op,nama_lengkap,alamat,rtrw,gender,pekerjaan) 
                                   values ('$id_wp','$npwp','$op_id','$nama_lengkap','$alamat','$rtrw','$gender','$pekerjaan')";
                        $result3 = mysqli_query($koneksi, $query3);

                        if ($result3) {

                            $query4 = "SELECT id_wp from data_wp order by id_wp DESC";
                            $result4 = mysqli_query($koneksi, $query4);
                            $res_wp = mysqli_fetch_assoc($result4);

                            $wp_id = $res_wp['id_wp'];

                            $query5 = "SELECT nama_lengkap from data_wp order by id_wp DESC";
                            $result5 = mysqli_query($koneksi, $query5);
                            $res_nama = mysqli_fetch_assoc($result5);

                            $nama = $res_nama['nama_lengkap'];

                            $query5 = "SELECT harga_tanah from objek_pajak order by id_op DESC";
                            $result5 = mysqli_query($koneksi, $query5);
                            $res_hargat = mysqli_fetch_assoc($result5);

                            $tharga = $res_hargat['harga_tanah'];

                            $query5 = "SELECT harga_bangunan from objek_pajak order by id_op DESC";
                            $result5 = mysqli_query($koneksi, $query5);
                            $res_hargab = mysqli_fetch_assoc($result5);

                            $bharga = $res_hargab['harga_bangunan'];

                            $njop = $tharga + $bharga;
                            $njkp = (20 / 100) * ($tharga + $bharga);
                            $pbb_dibayar = (0.5 / 100) * ((20 / 100) * ($tharga + $bharga));



                            $query5 = "INSERT into kwitansi (nama_lengkap,id_wp,id_op,njop,njkp,pbb_dibayar) values ('$nama','$wp_id','$op_id','$njop','$njkp','$pbb_dibayar')";
                            $result5 = mysqli_query($koneksi, $query5);
                ?>
                <?php
                        }
                    }
                }
                ?>
                <h3 class="text-center">Terimakasih , telah melakukan pendataran mohon cek data pajak anda!.</h3>
                <a href="data-pajak-bumi-dan-bangunan" class="btn btn-secondary btn-block mt-3" style="text-decoration: none;">Cek data pajak</a>
                <a href="index" class="btn btn-primary btn-block mt-1" style="text-decoration: none;">Back To Home</a>
            </div>
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