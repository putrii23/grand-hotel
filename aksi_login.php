<?php
// mengaktifkan session php
session_start();

// menghubungkan dengan koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = md5 ($_POST['password']);

// menyeleksi data tamu dengan email dan password yang sesuai
$data = mysqli_query($koneksi,"select * from tbl_tamu where email='$email' and password='$password'");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);

if($cek > 0){
   $_SESSION['email'] = $email;
   $_SESSION['status'] = "login";
   header("location:tamu/halaman_awal.php");
}else{
   header("location:index.php?pesan=gagal");
}
?>