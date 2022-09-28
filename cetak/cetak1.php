<html>

<head>
    <title><?php echo $title; ?></title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- DataTables -->
    <!-- <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css"> -->
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
    <!-- custom css -->
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>

    <div class="p-3">
        <img src="../assets/dist/img/logo-pbb.png" style="float: left; width: 120px;height:100px">
        <div class="text-center text-bold" style="font-size: 30px">Pemerintah Kota Palembang </div>
        <div class="text-center text-bold" style="font-size: 30px">Laporan Detail Pajak Bumi dan Bangunan </div>
        <p class="text-center">Jl. Kapten A. Rivai No.4, Sungai Pangeran, Kec. Ilir Tim. I, Kota Palembang, Sumatera Selatan 30114</p>
        <hr class="border">
    </div>



    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body">
                            <h4>A. Detail Pajak</h4>
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th>Nama Lengkap</th>
                                        <th>Letak Objek</th>
                                        <th>Luas Tanah</th>
                                        <th>Luas Bangunan</th>
                                        <th>Harga Tabah</th>
                                        <th>Harga Bangunan</th>
                                        <th>NJOP</th>
                                        <th>NJKP</th>
                                        <th>PBB</th>
                                        <th>Tanggal Pemungutan</th>
                                        <th>Tanggal Jatuh Tempo</th>
                                        <th>Denda</th>
                                        <!-- <th>Tanggal Pembayaran</th> -->
                                        <th>Keterangan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include '../config/koneksi.php';
                                    $query = "SELECT objek_pajak.*, kwitansi.*, data_wp.* FROM kwitansi 
                                              LEFT JOIN objek_pajak ON objek_pajak.id_op = kwitansi.id_op
                                              LEFT JOIN data_wp ON data_wp.id_wp = kwitansi.id_wp";
                                    $result = mysqli_query($koneksi, $query);

                                    if (!$result) {
                                        die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                                    }

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $tgl_pemungutan = date("d-m-Y");
                                        $tgl_jatuh = date('d-m-Y', strtotime('+365 days', strtotime($tgl_pemungutan)));
                                    ?>
                                        <tr class="">
                                            <td><?php echo $row['nama_lengkap']; ?></td>
                                            <td><?php echo $row['letak_objek']; ?></td>
                                            <td><?php echo $row['luas_tanah']; ?> m</td>
                                            <td><?php echo $row['luas_bangunan']; ?> m</td>
                                            <td>Rp.<?php echo number_format($row['harga_tanah'], 0, ',', '.'); ?>,-</td>
                                            <td>Rp.<?php echo number_format($row['harga_bangunan'], 0, ',', '.'); ?>,-</td>
                                            <td>Rp.<?php echo number_format($row['njop'], 0, ',', '.'); ?>,-</td>
                                            <td>Rp.<?php echo number_format($row['njkp'], 0, ',', '.'); ?>,-</td>
                                            <td>Rp.<?php echo number_format($row['pbb_dibayar'], 0, ',', '.'); ?>,-</td>
                                            <!-- <td><?php echo $row['tgl_pembayaran']; ?></td> -->
                                            <td><?php echo $tgl_pemungutan; ?></td>
                                            <td><?php echo $tgl_jatuh; ?></td>
                                            <td>Rp.<?php echo number_format($row['denda'], 0, ',', '.'); ?>,-</td>
                                            <td><?php echo $row['keterangan']; ?></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <script>
        window.print();
    </script>
    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../assets/dist/js/adminlte.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../assets/plugins/jszip/jszip.min.js"></script>
    <script src="../assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- Page specific script -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": true,
                // "buttons": ["copy", "csv", "excel", "pdf", "print"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": false,
                "lengthChange": false,
                "searching": false,
                "ordering": false,
                "info": false,
                "autoWidth": false,
                "responsive": false,
            });
        });
    </script>

</body>

</html>