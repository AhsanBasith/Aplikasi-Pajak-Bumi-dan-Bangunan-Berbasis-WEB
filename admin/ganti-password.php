<?php
$Page = "Ganti Password";
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
                    <h1>Ganti Password</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                        <li class="breadcrumb-item active">Ganti Password</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Ganti Password anda dengan teliti!</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="quickForm" action="../config/admin/ganti_password.php" method="POST">
                            <div class="card-body">
                                <input type="hidden" name="username" value="<?= $_SESSION['username'] ?>">
                                <div class="form-group">
                                    <label class="form-label">Password Lama</label>
                                    <input type="text" name="pass_lama" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Password Baru</label>
                                    <input type="text" name="pass_baru" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Konfirmasi Password</label>
                                    <input type="text" name="konfirmasi_pass" class="form-control" required>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
                <!-- right column -->
                <div class="col-md-6">

                </div>
                <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
require 'includes/footer.php';
?>