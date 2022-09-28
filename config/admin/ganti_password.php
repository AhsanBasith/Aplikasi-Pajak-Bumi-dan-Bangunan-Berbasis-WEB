<?php

include '../koneksi.php';

$pass_lama = $_POST['pass_lama'];
$username      = $_POST['username'];

$tampil = mysqli_query($koneksi, "SELECT * from admin where username = '$username' and password = '$pass_lama' ");
$data = mysqli_fetch_array($tampil);

if ($data) {
    $pass_baru = $_POST['pass_baru'];
    $konfirmasi_pass = $_POST['konfirmasi_pass'];
    if ($pass_baru == $konfirmasi_pass) {
        $pass_ok = $konfirmasi_pass;
        $ubah = mysqli_query($koneksi, "UPDATE admin set password = '$pass_ok' where id_admin='$data[id_admin]' ");
        if ($ubah) {
            echo "<script>alert('Password berhasil diubah');document.location='../../admin/ganti-password'</script>>";
        }
    } else {
        echo "<script>alert('password baru dan konfirmasi password tidak sama');document.location='../../admin/ganti-password'</script>>";
    }
} else {
    echo "<script>alert('Maaf password lama anda salah');document.location='../../admin/ganti-password'</script>>";
}
