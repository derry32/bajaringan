<?php
session_start();


echo "<pre>";
//print_r($_SESSION['keranjang']);
echo "</pre>";

include 'koneksi.php';


if(empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"]))
{
	echo "<script>alert('keranjang kosong, silahkan belanja dulu!');</script>";
	echo "<script>location='index.php';</script>";
}
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

<!--konten-->
<section class="konten">
	<div class="container">
		<h1>Keranjang Belanja</h1>
		<hr>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th> No </th>
					<th> Produk </th>
					<th> Harga </th>
					<th> Jumlah </th>
					<th> Subharga </th>
					<th> Aksi </th>
				</tr>
			</thead>
			<tbody>
				<?php $nomor=1; ?>
				<?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah): ?>
<!--Menampilkan produk yang sedang di perulangkan berdasarkan id_produk-->
<?php
$ambil = $koneksi->query("SELECT * FROM produk 
	WHERE id_produk='$id_produk'");
$pecah = $ambil->fetch_assoc();
$subharga = $pecah["harga_produk"]*$jumlah;

?>
				<tr>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $pecah["nama_produk"]; ?></td>
					<td>Rp. <?php echo number_format($pecah["harga_produk"]); ?></td>
					<td><?php echo $jumlah; ?></td>
					<td>Rp. <?php echo number_format($subharga); ?></td>
					<td>
						<a href="hapuskeranjang.php?id=<?php echo $id_produk ?>" class="btn btn-danger btn-xs">Hapus</a>
					</td>
				</tr>
				<?php $nomor++; ?>
			<?php endforeach?>
			</tbody>
		</table>

		<a href="index.php" class="btn btn-default">Lanjutkan Belanja</a>
		<a href="checkout.php" class="btn btn-primary">Checkout</a>
	</div>
</section>



</body>
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
</html>