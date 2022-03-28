<?php 
include '../koneksi.php';
$nama_kamar = mysqli_real_escape_string($koneksi,$_POST['nama_kamar']);
$fasilitas_kamar = mysqli_real_escape_string($koneksi,$_POST['fasilitas_kamar']);
$harga_kamar = mysqli_real_escape_string($koneksi,$_POST['harga_kamar']);
$jml_kamar = mysqli_real_escape_string($koneksi,$_POST['jml_kamar']);

mysqli_query($koneksi,"INSERT into tbl_kamar values('','$id_kamar','nama_kamar', '$fasilitas_kamar','$harga_kamar','','$jml_kamar')");
		header("location:../admin/tabel_kamar.php?pesan=input");

?>