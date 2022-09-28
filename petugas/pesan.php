<?php
$Page = "Pesan";
include 'includes/sidebar.php';
include '../config/koneksi.php';
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pesan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Pesan</li>
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
                            <h3 class="card-title">Inbox</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <div class="mailbox-controls">
                                <!-- /.btn-group -->
                                <a type="button" class="btn btn-default btn-sm" onClick="window.location.reload()">
                                    <i class="fas fa-sync-alt"></i>
                                </a>
                                <a href="../config/admin/hapus_semua_pesan.php" type="button" class="btn btn-default btn-sm">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                            <div class="table-responsive mailbox-messages">
                                <table class="table table-hover table-striped">
                                    <tbody>
                                        <?php
                                        $query = "SELECT * from pesan order by id_pesan DESC";
                                        $result = mysqli_query($koneksi, $query);

                                        if (!$result) {
                                            die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
                                        }

                                        while ($row = mysqli_fetch_assoc($result)) {
                                        ?>
                                            <tr>
                                                <td class="mailbox-name text-bold"><?php echo $row['nama']; ?></td>
                                                <td class="mailbox-subject">
                                                    <a href="baca-pesan?id=<?php echo $row['id_pesan']; ?>"><b><?php echo $row['subject']; ?></b> - <?php echo substr($row['pesan'], 0, 30) . '...'; ?></a>
                                                </td>
                                                <td class="mailbox-date"><?php echo $row['email']; ?></td>
                                                <td>
                                                    <div class="icheck-primary ">
                                                        <a href="../config/petugas/hapus_pesan.php?id_pesan=<?php echo $row['id_pesan']; ?>"><i class="fas fa-trash text-danger"></i></a>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <!-- /.table -->
                            </div>
                            <!-- /.mail-box-messages -->
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer p-0">
                            <div class="mailbox-controls">
                                <!-- /.btn-group -->
                                <a type="button" class="btn btn-default btn-sm" onClick="window.location.reload()">
                                    <i class="fas fa-sync-alt"></i>
                                </a>
                                <a type="button" class="btn btn-default btn-sm" onClick="window.location.reload()">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require 'includes/footer.php';
?>