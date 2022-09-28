<?php
include '../koneksi.php';

$id_pesan = $_GET['id_pesan'];
$query = "DELETE FROM pesan WHERE id_pesan ='$id_pesan'";
$result = mysqli_query($koneksi, $query);


if (!$result) {
    die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    echo "<script>alert('berhasil menghapus pesan');window.location='../../petugas/pesan'</script>";
}
