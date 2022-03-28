<!DOCTYPE html>
<html lang = "en">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Grand Mercure Hotel</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="img/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
         <div class="container">
    <nav class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                            <div class="logo-img">
                                <a href="index.php">
                                  <img class="mb-4" src="img/logo.PNG" alt="" width="72" height="57">
                                </a>
                            </div>
           <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
               <li><a href="index.php" class="nav-link px-2 link-secondary">Home</a></li>
               <li><a href="rooms.php" class="nav-link px-2 link-dark">Rooms</a></li>
               <li><a href="booking.php" class="nav-link px-2 link-dark">Booking</a></li>
               <li><a href="facility.php" class="nav-link px-2 link-dark">Facility</a></li>
               <li><a href="about_us.php" class="nav-link px-2 link-dark">About Us</a></li>
               <li><a href="contact_us.php" class="nav-link px-2 link-dark">Contact Us</a></li>
           </ul>
           <div class="text-end">
        <a href="index.php"><button type="button" class="btn btn-outline-primary me-2">Log out</button>
</nav>
    </header>
<!-- header-end -->

                <strong><h3>MEMBUAT RESERVASI</h3></strong>
                <div class = "well" style = "height:300px; width:100%;">
                        <div style = "float:left;">
                       <p><img width="350" height="235 alt=" src="img/offers//offers_bg_1.jpg" style="float:left; margin-right:40px;padding-top: 10px"></p>
                        <right><h4 style = "color:black; margin-left: 400px; padding-top: 20px;">Standard</h4></right>
                        <right><h5 style = "color:rgba(0, 255, 0, 1); margin-left:0px; padding-left: 10px;">Rp.400.000</h5></right>
                </div>
                <br style = "clear:both;" />
                <div class = "well col-md-4" style="width: 200%; height: 200px; padding-top: 70px;">
                    <table>
                   <form method="POST" action="aksi_rsvp.php" class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="<?php echo $row['nama_tamu'];?>" name="nama_tamu" readonly>
              <input type="hidden" class="form-control"  name="kd_reservasi" value="<?php echo $kd_reservasi;?>">
              <input type="hidden" class="form-control"  name="kd_tamu" value="<?php echo $row['kd_tamu'];?>">
              <input type="hidden" class="form-control"  name="tgl_dipesan" value="<?php echo date("Y-m-d"); ?>">
              <input type="hidden" class="form-control"  name="id_kamar" value="<?php echo $kamar['id_kamar'];?>">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="email" class="form-label">Jenis Kamar </label>
              <input type="text" class="form-control" placeholder="tipe kamar" name="nm_tipe_kamar" value="<?php echo $kamar['nm_tipe_kamar'];?>" readonly>
              <!-- <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div> -->
            </div>
           
            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" value="<?php echo $row['alamat']?>" readonly>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Jumlah Kamar yang Dipesan</label>
              <input type="number" class="form-control" id="lastName" placeholder="jumlah kamar" name="jml_kamar" min=1 max="<?php echo $kamar['jml_kamar'];?>"required>
              <div class="invalid-feedback">
                Isi jumlah kamar yang ingin dipesan.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Jumlah Orang</label>
              <input type="number" name="jml_orang" class="form-control" id="lastName" placeholder="jumlah orang" name="jml_orang" min=1 max="<?php echo $kamar['batas_orang'];?>" required>
              <div class="invalid-feedback">
                Isi jumlah orang yang akan menginap.
              </div>
            </div>
      
            <div class="col-md-6">
              <label for="country" class="form-label">Check In</label>
              <input type="date" class="form-control" id="country" name="tgl_cek_in" min="<?php echo date("Y-m-d"); ?>" required>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-6">
              <label for="country" class="form-label">Check Out</label>
              <input type="date" class="form-control" id="country" name="tgl_cek_out" min="<?php echo date("Y-m-d"); ?>" required>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-6">
              <label for="username" class="form-label">Lama Menginap</label>
              <div class="input-group has-validation">
              <input type="hidden" class="form-control" id="harga_kamar" name="harga_kamar" onkeyup="total()" value="<?php echo $kamar['harga_kamar'];?>" required>
                <input type="text" class="form-control" id="jml_hari" name="jml_hari" onkeyup="total()" min=1 placeholder="Lama menginap" required>
                <span class="input-group-text">malam</span>
              <div class="invalid-feedback">
                  Isi lama menginap.
                </div>
              </div>
            </div>


            <div class="col-md-6">
              <label for="zip" class="form-label">Total Bayar</label>
              <input type="text" class="form-control"  id="total_bayar" name="total_bayar" readonly>
              <!-- <div class="invalid-feedback">
                Zip code required.
              </div> -->
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Pesan Sekarang</button>
        </form>
      </div>
    </div>
  </main>

        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-8 col-md-7 col-lg-9">
                        <p class="copy_right">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </div>
                    <div class="col-xl-4 col-md-5 col-lg-3">
                        <div class="socail_links">
                            <ul>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-facebook-square"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
 <!-- footer_end -->

</body>  
</html>