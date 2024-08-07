<?php 

$koneksi = mysqli_connect('localhost','root','','latihan_rpl_crud');

if (!$koneksi){
    die(mysqli_connect_error($koneksi));
}

?>