<?php
include 'includes/header.php'
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0"> Contact US</small></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index">Home</a></li>
                        <li class="breadcrumb-item active">Contact</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container">
            <!-- Default box -->
            <div class="card">
                <div class="card-body row mt-3">
                    <div class="col-5 text-center d-flex align-items-center justify-content-center">
                        <div>
                            <img class="rounded-circle img-thumbnail" src="assets/dist/img/contact_us.png" alt="">
                            <h4>Contact Us</h4>
                            <p>Hubungi Kami jIka terjadi kendala!</p>
                        </div>
                    </div>
                    <div class="col-7">
                        <form action="config/front/pesan.php" method="POST">
                            <div class="form-group">
                                <label for="inputName">Nama Lengkap</label>
                                <input type="text" name="nama" id="nama" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="inputEmail">E-Mail</label>
                                <input type="email" name="email" id="email" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="inputName">Subject</label>
                                <input type="text" name="subject" id="subject" class="form-control" required />
                            </div>
                            <div class="form-group">
                                <label for="inputMessage">Pesan</label>
                                <textarea id="pesan" name="pesan" class="form-control" rows="7" required></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Kirim">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<?php
include 'includes/footer.php'
?>