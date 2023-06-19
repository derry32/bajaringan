<?php
session_start();
// koneksi ke database
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CV.Tunas Baja</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

   
<?php include 'menu.php'; ?>
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/gambar1.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <h3 class="vr"></h3>
          <div class="col-md-11 ftco-animate text-center">
            <!-- <h1>CV.Tunas Baja</h1>
            <h2><span>More Simple than Wood</span></h2> -->
          </div>
          <div class="mouse">
            <a href="#" class="mouse-icon">
              <div class="mouse-wheel"><span class="ion-ios-arrow-down"></span></div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="goto-here"></div>
    
    <section class="ftco-section ftco-product" >
      <div id="product1" class="container" >
        <div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <!-- <h1 class="big">Produk</h1> -->
            <h2 class="text-dark mb-4">Produk Kami</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="product-slider owl-carousel ftco-animate">
              <?php $ambil = $koneksi->query("SELECT * FROM produk ");?>
              <?php while($perproduk = $ambil->fetch_assoc()){?>
              <div class="item">
                <div class="product">
                  <a href="detail.php?id=<?php echo $perproduk['id_produk'];?>" class="img-prod"><img class="img-fluid" src="foto_produk/<?php echo $perproduk['foto_produk'];?>" alt="Colorlib Template">
                    <span class="status"></span>
                  </a>
                  <div class="text pt-3 px-3">
                    <h3><a href="#"><?php echo $perproduk ['nama_produk'];?></a></h3>
                    <div class="d-flex">
                      <div class="pricing">
                        <p class="price"><span class="price-sale">Rp. <?php echo number_format($perproduk['harga_produk']);?></span></p>
                      </div>
                      <div class="rating">
                        <p class="text-right">
                          <a href="beli.php?id=<?php echo $perproduk['id_produk']; ?>" class="btn btn-primary">Beli</a>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <?php }?>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>
   
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <!-- <h1 class="big">3 STEPS</h1> -->
            <h2>3 Cara Sebelum Mulai Membeli</h2>
          </div>
        </div>
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
            <div class="container">
              <a class="block-20" style="background-image: url('images/register.png');">
              </a>
              <div class="text mt-3 d-block">
                <h3 class="heading mt-3"><a href="#">ORDER</a></h3>
                <div class="meta mb-3">
                  <h8>1. Register (Buat Akun). </h8> <br>
                  <h8>2. Login.</h8> <br>
                  <h8>3. Pilih Barang yang Ingin Dibeli.</h8>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="container">
              <a class="block-20" style="background-image: url('images/payment.jpg');">
              </a>
              <div class="text mt-3">
                <h3 class="heading mt-3"><a href="#">PAYMENT</a></h3>
                <div class="meta mb-3">
                  <h8>1. Pilih Produknya</h8><br>
                  <h8>2. Klik "Checkout".</h8><br>
                  <h8>3. Pilih Produk yang ingin Dibeli.</h8><br>
                  <h8>4. Klik history ditampilan menu bar.</h8><br>
                  <h8>5. Pilih "Input Pembayaran."</h8>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
            <div class="container">
              <a class="block-20" style="background-image: url('images/kirim2.jpg');">
              </a>
              <div class="text mt-3">
                <h3 class="heading mt-3"><a href="#">PENGIRIMAN</a></h3>
                <div class="meta mb-3">
                  <h8>Barang secepat mungkin dikirim ketika pembayaran telah dilakukan</h8>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section bg-gray-dark ftco-services">
      <div class="container">
        <div class="row justify-content-center mb-3 pb-3">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h1 class="big">Services</h1>
            <h2>We want you to express yourself</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
                <span class="flaticon-002-recommended"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Trusted</h3>
                <p>Jaminan ketahanan dan keaslian produk. Produk kami memiliki sertifikat dan terdaftar di .</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
                <span class="flaticon-001-box"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Premium Delivery</h3>
                <p>Produk dikirim secara hati-hati dan sesuai protokol sehingga aman sampai ke konsumen.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 text-center d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services">
              <div class="icon d-flex justify-content-center align-items-center mb-4">
                <span class="flaticon-003-medal"></span>
              </div>
              <div class="media-body">
                <h3 class="heading">Legality</h3>
                <p>Kami merupakan Badan usaha resmi yang memiliki kelengkapan dokumen perusahaan yang sah.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>
    
       <footer class="ftco-footer bg-dark ftco-section">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="text-white ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><a href="https://www.google.com/maps/place/CV.+Tunas+Baja+Cibinong/@-6.4724965,106.8225639,15z/data=!4m5!3m4!1s0x0:0x1f824ebe18e2674c!8m2!3d-6.4724965!4d106.8225639"><span class="text-white icon icon-map-marker"></span><span class="text-white">Jl KSR Dadi Kusmayadi No.02, Tengah, Cibinong, Bogor, Jawa Barat 16914</span></a></li>
                  <li><a href="#"><span class="text-white icon icon-phone"></span><span class="text-white">+62 82113399099</span></a></li>
                  <li><a href="#"><span class="text-white icon icon-envelope"></span><span class="text-white">derryronaldo7@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="text-white col-md-12 text-center">
            <p>
              Copyright &copy;<script>document.write(new Date().getFullYear());</script>  derry.project All rights reserved 
            </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>