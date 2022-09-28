<?php

include '../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$bagian = $_POST['bagian'];


$query = "INSERT INTO admin (username,password,bagian) 
          VALUES ('$username','$password','$bagian')";

$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    header('location:../../admin/admin');;
}
