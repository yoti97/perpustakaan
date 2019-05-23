<?php 
include 'koneksi.php';
$id_buku = $_POST['id_buku'];
$judul_buku = $_POST['judul_buku'];
$pengarang = $_POST['pengarang'];

mysql_query("INSERT INTO buku VALUES('','$id_buku','$judul_buku','$pengarang')");

header("location:petugas?index.php");
?>