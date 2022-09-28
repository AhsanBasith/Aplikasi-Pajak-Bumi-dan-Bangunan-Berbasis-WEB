<?php
include '../koneksi.php';
// menyimpan data kedalam variabel
$kd_pembayaran = $_POST['kd_pembayaran'];
$denda = $_POST['denda'];
$keterangan = $_POST['keterangan'];


// query SQL untuk Update data
$query = "UPDATE kwitansi SET denda='$denda',keterangan='$keterangan'  
          WHERE kd_pembayaran='$kd_pembayaran'";
mysqli_query($koneksi, $query);
// mengalihkan ke halaman index.php
header('location:../../petugas/kwitansi.php');
