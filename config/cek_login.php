<?php

include "koneksi.php";

$email = mysqli_escape_string($koneksi, $_POST['email']);
$motto = mysqli_escape_string($koneksi, $_POST['motto']);
$bagian = mysqli_escape_string($koneksi, $_POST['bagian']);
$id_admin = mysqli_escape_string($koneksi, $_POST['id_admin']);
$username = mysqli_escape_string($koneksi, $_POST['username']);
$password = mysqli_escape_string($koneksi, $_POST['password']);

$cek_user = mysqli_query($koneksi, "SELECT * FROM admin WHERE username='$username' AND bagian='$bagian' ");
$user_valid = mysqli_fetch_array($cek_user);

//pengujian jika username terdaftar
if ($user_valid) {
    //jika username terdaftar :
    //pengecekan password
    if ($password == $user_valid['password']) {
        //jika password sesuai :
        //buat session
        session_start();
        $_SESSION['id_admin'] = $user_valid['id_admin'];
        $_SESSION['username'] = $user_valid['username'];
        $_SESSION['bagian'] = $user_valid['bagian'];
        $_SESSION['email'] = $user_valid['email'];
        $_SESSION['motto'] = $user_valid['motto'];

        //uji level user
        if ($bagian == "Admin") {
            header('location:../admin/dashboard.php');
        } elseif ($bagian == "Petugas") {
            header('location:../petugas/dashboard.php');
        }
    } else {
        echo "<script>alert('Maaf, Login gagal, Password anda salah');
        document.location='../login.php'</script>";
    }
} else {
    echo "<script>alert('Maaf, Login gagal, Username anda tidak terdaftar');
    document.location='../login.php'</script>";
}
