

<?php
include '../koneksi.php';
include '../../contact.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
$subject = $_POST['subject'];


$query = "INSERT INTO pesan (nama,email,pesan,subject) 
          VALUES ('$nama','$email','$pesan','$subject')";

$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error :" . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    echo "<script>alert('berhasil mengirim pesan');window.location='../../contact.php'</script>";
}
?>
