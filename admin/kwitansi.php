<?php
$Page = "Kwitansi";
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
                    <h1>Kwitansi</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Kwitansi</li>
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
                                        <th>No Kwitansi</th>
                                        <th>NJOP</th>
                                        <th>NJKP</th>
                                        <th>PBB</th>

                                        <th>Tanggal Pemungutan</th>
                                        <th>Tanggal Jatuh Tempo</th>
                                        <th>Denda</th>
                                        <!-- <th>Tanggal Pembayaran</th> -->
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * from kwitansi order by kd_pembayaran";
                                    $result = mysqli_query($koneksi, $query);

                                    if (!$result) {
                                        die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                                    }

                                    while ($row = mysqli_fetch_assoc($result)) {
                                        $tgl_pemungutan = date("d-m-Y");
                                        $tgl_jatuh = date('d-m-Y', strtotime('+365 days', strtotime($tgl_pemungutan)));
                                    ?>
                                        <tr class="text-center">
                                            <td>00<?php echo $row['kd_pembayaran']; ?></td>
                                            <td>Rp.<?php echo number_format($row['njop'], 0, ',', '.'); ?>,-</td>
                                            <td>Rp.<?php echo number_format($row['njkp'], 0, ',', '.'); ?>,-</td>
                                            <td>Rp.<?php echo number_format($row['pbb_dibayar'], 0, ',', '.'); ?>,-</td>
                                            <!-- <td><?php echo $row['tgl_pembayaran']; ?></td> -->
                                            <td><?php echo $tgl_pemungutan; ?></td>
                                            <td><?php echo $tgl_jatuh; ?></td>
                                            <td>Rp.<?php echo number_format($row['denda'], 0, ',', '.'); ?>,-</td>
                                            <td><?php echo $row['keterangan']; ?></td>
                                            <td>
                                                <a class="btn btn-warning btn-sm mb-1" id="tombolEditKwitansi" data-toggle="modal" data-target="#editKwitansi" data-kdp="<?php echo $row['kd_pembayaran']; ?>" data-denda="<?php echo $row['denda']; ?>" data-keterangan="<?php echo $row['keterangan']; ?>">Edit</a>
                                                <a href="../config/admin/hapus_kwitansi.php?kd_pembayaran=<?php echo $row['kd_pembayaran']; ?>" class="btn btn-danger btn-sm mb-1">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr class="text-center">
                                        <th>No Kwitansi</th>
                                        <th>NJOP</th>
                                        <th>NJKP</th>
                                        <th>PBB</th>
                                        <th>Tanggal Pemungutan</th>
                                        <th>Tanggal Jatuh Tempo</th>
                                        <th>Denda</th>
                                        <!-- <th>Tanggal Pembayaran</th> -->
                                        <th>Keterangan</th>
                                        <th>Aksi</th>
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