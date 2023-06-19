<?php
session_start();
// koneksi ke database
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CV. Tunas</title>
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

    <section class="ftco-section bg-light">
    	<div class="container-fluid">
    		<div class="row">
    			<?php $ambil = $koneksi->query("SELECT * FROM produk ");?>
                <?php while($perproduk = $ambil->fetch_assoc()){?>

                  <div class="col-sm col-md-6 col-lg-3 ftco-animate">
                    <div class="product">
                      <a href="detail.php?id=<?=$perproduk['id_produk']?>" class="img-prod"><img class="img-fluid" src="foto_produk/<?=$perproduk['foto_produk']?>" alt="Colorlib Template">
                        <!-- <span class="status"> -->
                      </a>
                      <div class="text py-3 px-3">
                        <h3><a href="detail.php?id=<?=$perproduk['id_produk']?>"><?=$perproduk['nama_produk']?></a></h3>
                        <div class="d-flex">
                          <div class="pricing">
                            <p class="price"><span class="price-sale">Rp. <?php echo number_format($perproduk['harga_produk']);?></span></p>
                          </div>
                        </div>
                        <hr>
                        <p class="bottom-area d-flex">
                          <a href="detail.php?id=<?=$perproduk['id_produk']?>" class="add-to-cart"><span>Add to cart <i class="ion-ios-add ml-1"></i></span></a>
                        </p>
                    </div>
                </div>
    			</div>
             <?php }?>
        
        </div>
      </div>
    </section>
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