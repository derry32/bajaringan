<?php session_start(); ?>
<?php include 'koneksi.php'; ?>
<?php
// Mendapatkan id_produk dari url
$id_produk = $_GET["id"];

// Query ambil data
$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
$detail = $ambil->fetch_assoc();


?>

<!DOCTYPE html>
<html>
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

    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Custom Logo -->
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light ftco-navbar-light-2" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">CV. Tunas Baja</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
        
          
          <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
			<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="product.php">Produk</a>
                <a class="dropdown-item" href="kategori_reng.php">Reng</a>
                <a class="dropdown-item" href="kategori_atap.php">Atap</a>
                <a class="dropdown-item" href="kategori_truss.php">Truss</a>
              </div>
            </li>
            <li class="nav-item"><a href="baja_benefits.php" class="nav-link">Baja Benefits</a></li>
            <li class="nav-item"><a href="tips_tricks.php" class="nav-link">Tips & Tricks</a></li>
            <li class="nav-item"><a href="keranjang.php" class="nav-link"><span class="icon-shopping_cart"></span>Cart[0]</a></li>
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


<section class="konten">
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<img src="foto_produk/<?php echo $detail["foto_produk"]; ?>"  alt="" class="img-fluid">
			</div>
			<div class="col-md-6">
				<h2><?php echo $detail["nama_produk"] ?></h2>
				<h4>Rp. <?php echo number_format($detail["harga_produk"]); ?></h4>

				<h5>Tersisa : <?php echo $detail['stok_produk'] ?></h5>
				<h6>Pengiriman Gratis Ke Seluruh Jabodetabek!!!</h6>
				</h6> 
				<form method="post">
				<div class="form-group">
					<div class="input-group">
						<h6>Deskripsi Produk : </h6>
					</div>
						<p align=justify><?php echo $detail["deskripsi_produk"]; ?></p>
						</div>
						<h7>Kuantitas </h7>&emsp;<input required="" type="number" min="1" class="form-control" name="jumlah" max=" <?php echo $detail['stok_produk']?> ">&nbsp;
						<div class="input-group-btn" >
							<button class="btn btn-primary" name="beli" >Beli</button>
						</div>
					</div>
				</div>
				</form>
				<?php

				//Jika ada tombol beli
				if (isset($_POST["beli"]))
				{
					//mendapatkan jumlah yang diinputkan
					$jumlah = $_POST["jumlah"];
					// Masukkan di keranjang belanja
					$_SESSION["keranjang"][$id_produk] = $jumlah;

					echo "<script>alert('produk telah masuk ke keranjang belanja');</script>";
					echo "<script>location='keranjang.php';</script>";
				}
				?>
				
			</div>
	</div>
</div>
</section>
</body>
</html>
