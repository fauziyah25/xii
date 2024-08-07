<?php
include 'koneksi.php';
$nama = $_POST['nama'];
$umur = $_POST['umur'];

$sql = "update siswa set umur='$umur' where nama='$nama'";
$query = mysqli_query($koneksi, $sql);
if (!$query){
    die(mysqli_error($koneksi));
}
header("Location: index.php");
?>