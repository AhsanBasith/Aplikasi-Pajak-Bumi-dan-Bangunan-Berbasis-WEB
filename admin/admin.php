<?php
$Page = "Admin";
require 'includes/sidebar.php';
// $title = "admin";
include '../config/koneksi.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Admin</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Admin</li>
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
                            <a class="btn btn-primary" id="tombolTambahAdmin" data-toggle="modal" data-target="#tambahAdmin">Tambah Data</a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr class="text-center">
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Bagian</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $query = "SELECT * from admin order by id_admin";
                                    $result = mysqli_query($koneksi, $query);

                                    if (!$result) {
                                        die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                                    }

                                    while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                        <tr class="text-center">
                                            <td><?php echo $row['username']; ?></td>
                                            <td><?php echo $row['password']; ?></td>
                                            <td><?php echo $row['bagian']; ?></td>
                                            <td>
                                                <a href="../config/admin/hapus_admin.php?id_admin=<?php echo $row['id_admin']; ?>" class="btn btn-danger btn-sm mb-1">Hapus</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr class="text-center">
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Bagian</th>
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