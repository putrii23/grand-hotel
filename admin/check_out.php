<?php
include '../koneksi.php';
if (isset($_POST['id_pesan'])) {
	$id = $_POST['id_pesan'];
	mysqli_query($koneksi, "UPDATE tbl_pesan SET status = 'tgl_check_out' where id_pesan = '$id'");
	header("location:tabel_pesanan");
}
?>