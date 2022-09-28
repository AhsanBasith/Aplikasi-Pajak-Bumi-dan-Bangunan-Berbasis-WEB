<?php
include '../koneksi.php';

$kd_pembayaran = $_GET['kd_pembayaran'];

$query = "DELETE objek_pajak.*, kwitansi.*, data_wp.* FROM kwitansi 
          LEFT JOIN objek_pajak ON objek_pajak.id_op = kwitansi.id_op
          LEFT JOIN data_wp ON data_wp.id_wp = kwitansi.id_wp ";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    header('location:../../petugas/detail-pajak');
}
