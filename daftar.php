<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Pendaftaran Akun Tamu</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
        body{
        background-image: url(img/bg.PNG);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <?php

	// menghubungkan dengan koneksi database
	include 'koneksi.php';
 
	// mengambil data tamu dengan kode paling besar
	$query = mysqli_query($koneksi, "SELECT max(kd_tamu) as kd_tamu FROM tbl_tamu");
	$data = mysqli_fetch_array($query);
	$kd_tamu = $data['kd_tamu'];
 
	// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
	// dan diubah ke integer dengan (int)
	$urutan = (int) substr($kd_tamu, 3, 3);
 
	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
	$urutan++;
 
	// membentuk kode barang baru
	// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
	// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
	// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
	$huruf =  "TM";
	$kd_tamu = $huruf . sprintf("%03s", $urutan);
	?>

  <body class="text-center" style="margin-left: 350px;">
  <?php 
if(isset($_GET['pesan'])){
	if($_GET['pesan'] == "gagal"){
		echo "Data tidak tersimpan dan tidak terdaftar";
	}
}
?>
<!-- <main class="form-signin" > -->
<div class="container">
   <div class="row">
  <form method="post" action="aksi_daftar.php" > 
    <img class="mb-4" src="img/logo.PNG" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Daftar Akun</h1>
    <div class="col">
  <input type="hidden" name="kd_tamu" required="required" value="<?php echo $kd_tamu ?>" readonly>
</div>
<div class="row" >
  
  <div class="col" >
    <input type="text" class="form-control" placeholder="Nama Lengkap" aria-label="Nama Lengkap" name="nama_tamu">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Email" aria-label="Email" name="email">
  </div>
</div>

<div class="input-group">
  <span class="input-group-text">Alamat lengkap</span>
  <textarea class="form-control" aria-label="Alamat" name="alamat"></textarea>
</div>

<div class="row">
  <div class="col-sm-4">
  <div class="input-group">
      <label class="input-group-text" for="inputGroupSelect01">Provinsi</label>
  <select class="form-select" id="inputGroupSelect01" name="provinsi">
    <option selected>Choose...</option>
    <option value="1">Jawa Barat</option>
    <option value="2">Jawa tengah</option>
    <option value="3">Jawa Timur</option>
    <option value="4">Sumatera Barat</option>
    <option value="5">Sumatera Selatan</option>
    <option value="6">Sumatera Utara</option>
    <option value="7">Kalimantan Barat</option>
    <option value="8">Kalimantan Timur</option>
    <option value="9">Kalimantan Selatan</option>
    <option value="10">Kalimantan Tengah</option>
    <option value="11">Kalimantan Utara</option>
    <option value="12">Sulawesi Barat</option>
    <option value="13">Sulawesi Tengah</option>
    <option value="14">Sulawesi Utara</option>
    <option value="15">Sulawesi Tenggara</option>
    <option value="16">Sulawesi Selatan</option>
    <option value="17">Maluku</option>
    <option value="18">Maluku Utara</option>
    <option value="19">Papua</option>
    <option value="20">Papua Barat</option>
    <option value="21">Bengkulu</option>
    <option value="22">Riau</option>
    <option value="23">Kepulauan Riau</option>
    <option value="24">Jambi</option>
    <option value="25">Lampung</option>
    <option value="26">Bangka Belitung</option>
    <option value="27">Banten</option>
    <option value="28">DKI Jakarta</option>
    <option value="29">DI Yogyakarta</option>
    <option value="30">Bali</option>
    <option value="31">Nusa Tenggara Timur</option>
    <option value="32">Nusa Tenggara Barat</option>
    <option value="33">Gorontalo</option>
    <option value="33">Nanggore Aceh Darusslam</option>
  </select>
</div>
  </div>

  <div class="col-sm-4">
  <div class="input-group">
      <label class="input-group-text" for="inputGroupSelect01">Kota</label>
  <select class="form-select" id="inputGroupSelect01" name="kota">
    <option selected>Choose...</option>
   <option value="1">Bandung Barat</option>
    <option value="2">Bandung</option>
    <option value="3">Bekasi</option>
    <option value="4">Bogor</option>
    <option value="5">Ciamis</option>
    <option value="6">Cianjur</option>
    <option value="7">Cirebon</option>
    <option value="8">Garut</option>
    <option value="9">Indramayu</option>
    <option value="10">Karawang</option>
    <option value="11">Kuningan</option>
    <option value="12">Majalengka</option>
    <option value="13">Pangandaran</option>
    <option value="14">Purwakarta</option>
    <option value="15">Subang</option>
    <option value="16">Sukabumi</option>
    <option value="17">Sumedang</option>
    <option value="18">Tasikmalaya</option>
    <option value="19">Cimahi</option>
    <option value="20">Banjar</option>
    <option value="21">Denpasar</option>
    <option value="22">Banda Aceh</option>
    <option value="23">Sabang</option>
    <option value="24">Pekalongan</option>
    <option value="25">Semarang</option>
    <option value="26">Blitar</option>
    <option value="27">Malang</option>
    <option value="28">Surabaya</option>
    <option value="29">Tegal</option>
    <option value="30">Pontianak</option>
    <option value="31">Madiun</option>
    <option value="32">Balikpapan</option>
    <option value="33">Samarinda</option>
    <option value="33">Tanjung Pinang</option>
  </select>
</div>
  </div>

  <div class="col-sm-4">
  <div class="input-group">
      <label class="input-group-text" for="inputGroupSelect01">Kecamatan</label>
  <select class="form-select" id="inputGroupSelect01" name="kecamatan">
    <option selected>Choose...</option>
    <option value="1">Batujajar</option>
    <option value="2">Padalarang</option>
    <option value="3">Saguling</option>
    <option value="4">Cililin</option>
    <option value="5">Cisarua</option>
    <option value="6">Cihampelas</option>
    <option value="7">Cikalongwetan</option>
    <option value="8">Cipatat</option>
    <option value="9">Cipongkor</option>
    <option value="10">Cipeundeuy</option>
    <option value="11">Cileunyi</option>
    <option value="12">Cimeunyan</option>
    <option value="13">Cilengkrang</option>
    <option value="14">Cicendo</option>
    <option value="15">Gunung Halu</option>
    <option value="16">Sindang Kerta</option>
    <option value="17">Rongga</option>
    <option value="18">Parongpong</option>
    <option value="19">Ngamprah</option>
    <option value="20">Lembang</option>
    <option value="21">Margahayu</option>
    <option value="22">Bojongsoang</option>
    <option value="23">Katapang</option>
    <option value="24">Margaasih</option>
    <option value="25">Dayeuh Kolot</option>
    <option value="26">Andir</option>
    <option value="27">Antapani</option>
    <option value="28">Astana Anyar</option>
    <option value="29">Arcamanik</option>
    <option value="30">Babakan Ciparay</option>
    <option value="31">Gunung Kidul</option>
    <option value="32">Buah Batu</option>
    <option value="33">Kiaracondong</option>
    <option value="33">Lengkong</option>
  </select>
</div>
  </div>
</div>

<div class="row">
  <div class="col-sm">
    <input type="text" class="form-control" placeholder="Nomor Telepon" aria-label="Nomor Handphone" name="nmr_telepon">
  </div>
  <div class="col-sm">
    <input type="password" class="form-control" placeholder="password" aria-label="password" name="password">
  </div>
</div>

    <button class="w-50 btn btn-lg btn-primary" type="submit">Daftar </button>
    <div class="checkbox mb-3">
      <label>
        <a href="login.php">Sudah memiliki akun?Login disini!</a>
       
      </label>
    </div>
    <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
  </form>
</main>


    
  </body>
</html>
