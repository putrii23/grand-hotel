<?php
// mengaktifkan session

session_start();

// menghubungkan dengan koneksi database
include '../koneksi.php';

// menangkap data yang dikirim dari form
$id_pesan = $_POST['id_pesan'];
$kd_tamu = $_POST['kd_tamu'];
$tgl_check_in = $_POST['tgl_cek_in'];
$tgl_check_out = $_POST['tgl_cek_out'];
$jml_kamar_dipesan = $_POST['jml_kamar_dipesan'];
$jml_orang = $_POST['jml_orang'];
$jml_hari = $_POST['jml_hari'];
$id_kamar = $_POST['id_kamar'];
$total_bayar = $_POST['total_bayar'];

// menyiapkan data reservasi ke database
$data_rsvp = mysqli_query($koneksi,"INSERT INTO tbl_pesan VALUES ('$id_pesan', '$kd_tamu', '$tgl_check_in', '$tgl_check_out', '$jml_kamar_dipesan', '$jml_orang', '$jml_hari', '$id_kamar', '$total_bayar', '$status_reservasi')");

if ($data_rsvp) {
	header("location:sudah_pesan.php?pesan=berhasil");
	}else{
	header("location:index.php?pesan=gagal");
	}
?>