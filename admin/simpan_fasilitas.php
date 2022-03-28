<?php 
include '../koneksi.php';
$nama_fasilitas = mysqli_real_escape_string($koneksi,$_POST['nama_fasilitas']);
$deskripsi = mysqli_real_escape_string($koneksi,$_POST['deskripsi']);



mysqli_query($koneksi,"INSERT into tbl_fasilitas values('','$nama_fasilitas','$deskripsi')");
		header("location:tabel_fasilitas.php?pesan=input");

?>