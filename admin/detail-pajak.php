<?php
$Page = "Detail Pajak";
require 'includes/sidebar.php';

include '../config/koneksi.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Detail Pajak</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Detail Pajak</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
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
                                        <tr class="text-center">
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
                                <tfoot>
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
                                </tfoot>
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
</div>
<!-- /.content-wrapper -->

<?php
require 'includes/footer.php';
?>