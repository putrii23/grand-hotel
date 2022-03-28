<!DOCTYPE html>
<html lang = "en">
    <head>
        <title>Reservasi Hotel</title>
        <meta charset = "utf-8" />
        <meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
        <link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css " />
        <link rel = "stylesheet" type = "text/css" href = "css/style.css" />
    </head>
<!-- Bootstrap core CSS -->
<link href="../css/bootstrap.min.css" rel="stylesheet">

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
      }
    </style>


<body>
    <header>
         <div class="container">
    <nav class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
                            <div class="logo-img">
                                <a href="index.php">
                                  <img class="mb-4" src="../img/logo.PNG" alt="" width="72" height="57">
                                </a>
                            </div>
           <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
               <li><a href="../tamu/halaman_awal.php" class="nav-link px-2 link-secondary">Home</a></li>
               <li><a href="../rooms.php" class="nav-link px-2 link-dark">Rooms</a></li>
               <li><a href="../tamu/halaman_booking.php" class="nav-link px-2 link-dark">Booking</a></li>
               <li><a href="../facility.php" class="nav-link px-2 link-dark">Facility</a></li>
               <li><a href="../about_us.php" class="nav-link px-2 link-dark">About Us</a></li>
               <li><a href="../contact_us.php" class="nav-link px-2 link-dark">Contact Us</a></li>
           </ul>
    </nav>
</div>
</header>
                <strong><h3>MEMBUAT RESERVASI</h3></strong>
                <div class = "well" style = "height:300px; width:100%;">
                        <div style = "float:left;">
                       <p><img width="350" height="235 alt=" src="../img/offers/offers_bg_1.jpg" style="float:left; margin-right:40px;padding-top: 10px"></p>
                        <right><h4 style = "color:black; margin-left: 400px; padding-top: 20px;">Standard</h4></right>
                        <right><h5 style = "color:rgba(0, 255, 0, 1); margin-left:0px; padding-left: 10px;">Rp 400.000</h5></right>
                </div>
                <br style = "clear:both;" />
                <div class = "well col-md-4" style="width: 200%; height: 200px; padding-top: 70px;">
                    <table>
                      <form method="post" action="aksi_rsvp.php">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="firstName" placeholder="nama lengkap" value="" name="nama_tamu" required>
              <input type="hidden" class="form-control"  name="id_pesan" value="<?php echo $row['id_pesan'];?>">
              <input type="hidden" class="form-control"  name="kd_tamu" value="<?php echo $row['kd_tamu'];?>">
              <input type="hidden" class="form-control"  name="id_kamar" value="<?php echo $row['id_kamar'];?>">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="email" class="form-label">Jenis Kamar </label>
              <input type="text" class="form-control" placeholder="tipe kamar" name="jenis_kamar" value="" required>
              <!-- <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div> -->
            </div>
           
            <div class="col-12">
              <label for="address" class="form-label">Address</label>
              <input type="text" class="form-control" id="address" placeholder="alamat" value="" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Jumlah Kamar Dipesan</label>
              <input type="number" class="form-control" id="lastName" placeholder="jumlah kamar dipesan" name="jml_kamar_dipesan"required>
              <div class="invalid-feedback">
                Isi jumlah kamar yang ingin dipesan.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Jumlah Orang</label>
              <input type="number" name="jml_orang" class="form-control" id="lastName" placeholder="jumlah orang" name="jml_orang" required>
              <div class="invalid-feedback">
                Isi jumlah orang yang akan menginap.
              </div>
            </div>
      
            <div class="col-md-6">
              <label for="country" class="form-label">Check In</label>
              <input type="date" class="form-control" id="country" name="tgl_cek_in" min="<?php echo date(Y-m-d); ?>" required>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-6">
              <label for="country" class="form-label">Check Out</label>
              <input type="date" class="form-control" id="country" name="tgl_cek_out" min="<?php echo date(Y-m-d); ?>" required>
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
              <input type="text" class="form-control"  id="total_bayar" name="total_bayar" required>
              <!-- <div class="invalid-feedback">
                Zip code required.
              </div> -->
            </div>
          </div>

          <hr class="my-4">
          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <a href="../tamu/sudah_pesan.php"><button type="button" class="btn btn-outline-primary me-2">Pesan Sekarang</button>
         
        </form>
      </div>
    </div>
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
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>  
</html>