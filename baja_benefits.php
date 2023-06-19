<?php
session_start();
// koneksi ke database
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CV. Tunas Baja</title>
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

   
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark ftco-navbar-light-2" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">CV. Tunas Baja</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">

      <?php $ambil = $koneksi->query("SELECT * FROM produk ");?>
      <?php $ambil = ($perproduk = $ambil->fetch_assoc())?>
        
          
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item dropdown"><a href="#" class="nav-link">Product</a> 
              <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="product.php">Product</a>
                <a class="dropdown-item" href="kategori_reng.php">Reng</a>
                <a class="dropdown-item" href="kategori_atap.php">Atap</a>
                <a class="dropdown-item" href="kategori_truss.php">Truss</a>
              </div>
            </li>
            <li class="nav-item"><a href="baja_benefits.php" class="nav-link">Baja Benefits</a></li>
            <li class="nav-item"><a href="keranjang.php" class="nav-link"><span class="icon-shopping_cart"></span>Cart</a></li>
            <?php if (isset($_SESSION["pelanggan"])): ?>
              <li class="nav-item"><a class="nav-link" href="riwayat.php">History</a></li>
              <li class="nav-item"><a class="nav-link" href="logout.php">Logout</a></li>
              <!--selain itu (belum login| blm ada session pelanggan) -->
              <?php else: ?>
            <li class="nav-item"><a href="daftar.php" class="nav-link">Register</a></li>
            <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
            <?php endif ?>
          </ul>
        </div>
      </div>
    </nav>
		
		<div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-0 bread">BAJA BENEFITS</h1>
          </div>
        </div>
      </div>
    </div>
		
		<section class="ftco-section bg-light">
    	<div class="container-fluid">
    		<div class="row">
          <?php
          $record_per_page =2;
          $page='';
          if(isset($_GET["page"]))
          {
            $page = $_GET["page"];
          }
          else
          {
            $page = 1;
          }

          $start_from = ($page - 1)*$record_per_page; 
        
          $query = mysqli_query($koneksi,"SELECT * FROM baja_benefits ORDER by id_benefits LIMIT $start_from, $record_per_page");
          $perproduk = mysqli_fetch_assoc($query);
          ?>

          <?php do{ 

          ?>
      
    			<div class="col-sm col-md-6 col-lg-4 ftco-animate">
    				<div class="product">
    					<a href="full_benefits.php?&id=<?php echo $perproduk['id_benefits'];?>" class="img-prod"><img class="img-fluid" src="foto_benefits/<?php echo $perproduk['foto_benefits'];?>" alt="Colorlib Template">
    					</a>
    					<div class="text py-3 px-3">
    						<b><?php echo $perproduk ['judul_benefits'];?></b>
    						<div class="d-flex">
    							<div class="pricing">
		    						<p class="price"></p>
		    					</div>
		    					<div class="rating">
	    							
	    						</div>
	    					</div>
	    					<hr>
    						<p class="bottom-area d-flex">
    							
    						</p>
    					</div>
    				</div>
    			</div>
                <div class="col-sm col-md-6 col-lg-6 ftco-animate">
                <p align=justify><?php echo substr($perproduk ['deskripsi_benefits'], 0,300);?> ...</p><a href="full_benefits.php?&id=<?php echo $perproduk['id_benefits'];?>">Read More</a>
                </div>
             <?php } while($perproduk = mysqli_fetch_assoc($query));?>
    		</div>

    		<div class="row mt-5">
          <div class="col text-center">
           <nav aria-label="Page navigation example">
              <ul class="pagination justify-content-center">
              <?php
              $page_query="SELECT * FROM baja_benefits ORDER by id_benefits";
              $page_result = mysqli_query($koneksi,$page_query);
              $total_records= mysqli_num_rows($page_result);
              $total_pages = ceil($total_records/$record_per_page);
              for ($i=1; $i<=$total_pages; $i++) 
              { 
              echo '<li class= "page-item"><a class="page-link" href="baja_benefits.php?page='.$i.'">'.$i.'</a><li>';
              }
              ?>
              </ul>
            </nav>
            <!-- Akhir Bagian Pagination -->
  

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