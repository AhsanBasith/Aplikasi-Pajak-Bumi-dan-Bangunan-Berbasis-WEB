<?php
$Page = "Data Wajib Pajak";
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
                    <h1>Data Wajib Pajak</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Data Wajib Pajak</li>
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
                                        <th>NPWP</th>
                                        <th>Nama Lengkap</th>
                                        <th>Alamat</th>
                                        <th>RT/RW</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Pekerjaan</th>
                                        <!-- <th>Aksi</th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * from data_wp order by id_wp";
                                    $result = mysqli_query($koneksi, $query);

                                    if (!$result) {
                                        die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                                    }

                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <tr class="text-center">
                                            <td><?php echo $row['npwp']; ?></td>
                                            <td><?php echo $row['nama_lengkap']; ?></td>
                                            <td><?php echo $row['alamat']; ?></td>
                                            <td><?php echo $row['rtrw']; ?></td>
                                            <td><?php echo $row['gender']; ?></td>
                                            <td><?php echo $row['pekerjaan']; ?></td>
                                            <!-- <td>
                                                <a href="../config/admin/hapus_pajak.php?id_op=<?php echo $row['id_op']; ?>" class="btn btn-danger btn-sm mb-1">Hapus</a>
                                            </td> -->
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr class="text-center">
                                        <th>NPWP</th>
                                        <th>Nama Lengkap</th>
                                        <th>Alamat</th>
                                        <th>RT/RW</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Pekerjaan</th>
                                        <!-- <th>Aksi</th> -->
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