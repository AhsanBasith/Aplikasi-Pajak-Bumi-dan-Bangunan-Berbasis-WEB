<?php
include '../koneksi.php';

$query = "DELETE FROM pesan";
$result = mysqli_query($koneksi, $query);


if (!$result) {
    die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    echo "<script>alert('berhasil menghapus semua pesan');window.location='../../petugas/pesan'</script>";
}
