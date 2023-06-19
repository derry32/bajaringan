<?php
session_start();
include 'koneksi.php';

$id_pembelian = $_GET["id"];

$ambil = $koneksi->query("SELECT * FROM pembayaran LEFT JOIN pembelian ON pembayaran.id_pembelian=pembelian.id_pembelian WHERE pembelian.id_pembelian = '$id_pembelian'");
$detbay = $ambil->fetch_assoc();

//echo "<pre>";
//print_r($detbay);
//echo "</pre>";

//Jika blm ada data pembayaran
if (empty($detbay))
{
	echo "<script>alert('Belum ada data pembayaran')</script>";
	echo "<script>location='riwayat.php';</script>";
}


//Jika data pelanggan yang bayar tiak sesuai dengan yg login
//echo "<pre>";
//print_r($_SESSION);
//echo "</pre>";

if ($_SESSION["pelanggan"]['id_pelanggan']!==$detbay["id_pelanggan"]) {
	echo "<script>alert('Anda tidak berhak melihat pembayaran orang lain')</script>";
	echo "<script>location='riwayat.php';</script>";
	exit();
	}
?>



<!DOCTYPE html>
<html>
<head>
	<title>TunasBaja.co.id</title>
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
    <link rel="icon" type="image/png" href="foto_produk/madu_organik.jpeg">
</head>
<body>

	<?php include 'menu.php'; ?>

	<div class="container">
		<h3>Lihat Pembayaran</h3>
		<div class="row">
			<div class="col-md-6">
			<table class="table">
				<tr>
					<th>Nama Penyetor</th>
					<td><?php echo $detbay["nama_penyetor"] ?></td>
				</tr>
				<tr>
					<th>Bank Transfer</th>
					<td><?php echo $detbay["bank_transfer"] ?></td>
				</tr>
				<tr>
					<th>Tanggal Pembayaran</th>
					<td><?php echo $detbay["tanggal_pembayaran"] ?></td>
				</tr>
				<tr>
					<th>Jumlah Pembayaran</th>
					<td>Rp. <?php echo number_format($detbay["jumlah_pembayaran"]) ?> </td>
				</tr>
				<tr>
					<th>Foto Bukti Pembayaran</th>
					<td><img src="bukti_pembayaran/<?php echo $detbay["bukti_pembayaran"]?>" alt="" class="img-responsive" width="130" height="100"> </td>
				</tr>
			</table>
			</div>
			
		</div>
		<a href="riwayat.php" class="btn btn-warning">Kembali</a>
	</div>
	<br>

</body>
</html>