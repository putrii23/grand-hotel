<?php

// menghubungkan dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$kd_tamu = $_POST['kd_tamu'];
$nama_tamu = $_POST['nama_tamu'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$provinsi = $_POST['provinsi'];
$kota = $_POST['kota'];
$kecamatan = $_POST['kecamatan'];
$no_telepon = $_POST['no_telepon'];
$password = md5 ($_POST['password']);

// menyimpan data tamu ke database
$data_tamu = mysqli_query($koneksi,"INSERT INTO tbl_tamu
VALUES ('$kd_tamu', '$nama_tamu', '$email', '$no_telepon', '$alamat', '$password', '$provinsi', '$kota', '$kecamatan')");

if ($data_tamu){
	header("location:login.php");
	}else{
	header("location:index.php?pesan=gagal");
	}

?>