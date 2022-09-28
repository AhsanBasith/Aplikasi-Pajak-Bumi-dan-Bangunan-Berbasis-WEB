<?php
require 'includes/sidebar2.php';
?>

<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
        Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021.</strong>All rights reserved
</footer>
</div>
<!-- ./wrapper -->

<!-- Modal Edit Kwitansi -->
<div class="modal fade" id="tambahAdmin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../config/petugas/tambah_admin.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_admin" class="form-control form-control-user" id="id_admin">
                    <div class="form-group">
                        <span>Username</span>
                        <input type="text" name="username" class="form-control form-control-user" id="username" required>
                    </div>
                    <div class="form-group">
                        <span>Password</span>
                        <input type="password" name="password" class="form-control form-control-user" id="password" required>
                    </div>
                    <div class="form-group">
                        <span>Bagian</span>
                        <select class="form-control " name="bagian" id="bagian">
                            <option>-- Pilih --</option>
                            <option value="Admin">Admin</option>
                            <option value="Petugas">Petugas</option>
                        </select>
                    </div>
                    <div class="modal-footer"></div>
                    <input class="btn btn-primary btn-user btn-block" type="submit" name="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Edit Kwitansi -->

<!-- Modal -->
<div class="modal fade" id="editKwitansi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Kwitansi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="../config/petugas/edit_kwitansi.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="kd_pembayaran" class="form-control form-control-user" id="kd_pembayaran">
                    <div class="form-group">
                        <span>Denda</span>
                        <input type="text" name="denda" class="form-control form-control-user" id="denda" required>
                    </div>
                    <div class="form-group">
                        <span>Keterangan</span>
                        <select class="form-control " name="keterangan" id="keterangan">
                            <option value="Belum Lunas">Belum Lunas</option>
                            <option value="Lunas">Lunas</option>
                        </select>
                    </div>
                    <div class="modal-footer"></div>
                    <input class="btn btn-primary btn-user btn-block" type="submit" name="edit" value="Edit">
                </form>
            </div>
        </div>
    </div>
</div>

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
            "lengthChange": true,
            "autoWidth": true,
            // "buttons": ["copy", "csv", "excel", "pdf", "print"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,
        });
    });
</script>

<script>
    $(function() {
        $("#detailPajak").DataTable({
            "responsive": true,
            "lengthChange": true,
            "autoWidth": true,
            // "buttons": ["copy", "csv", "excel", "pdf", "print"]
        }).buttons().container().appendTo('#detailPajak_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": true,
            "searching": true,
            "ordering": true,
            "info": true,
            "autoWidth": true,
            "responsive": true,
        });
    });
</script>

<!-- script modal edit -->
<script>
    $(document).on("click", "#tombolEditKwitansi", function() {
        let kdp = $(this).data('kdp');
        let denda = $(this).data('denda');
        let keterangan = $(this).data('keterangan');

        $(".modal-body #kd_pembayaran").val(kdp);
        $(".modal-body #denda").val(denda);
        $(".modal-body #keterangan").val(keterangan);
    });
</script>
</body>

</html>