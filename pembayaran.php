<?php
session_start();
// koneksi ke database
include 'koneksi.php';

//Jika tidak ada session pelanggan (blm login)
if (!isset($_SESSION["pelanggan"]) OR empty($_SESSION["pelanggan"]))
{
	echo "<script>alert('Silahkan login terlebih dahulu');</script>";
	echo "<script>location='login.php';</script>";
	exit();
}

// Mendapatkan id_pembelian dari url
$idpem = $_GET["id"];
$ambil = $koneksi->query("SELECT * FROM pembelian WHERE id_pembelian='$idpem'");
$detpem = $ambil->fetch_assoc();

//Mendapatkan id_pelanggan yang beli
$id_pelanggan_beli = $detpem["id_pelanggan"];
// Mendapatkan id_pelanggan yang login
$id_pelanggan_login = $_SESSION["pelanggan"]["id_pelanggan"];

if ($id_pelanggan_login !==$id_pelanggan_beli)
	{
	echo "<script>alert('Jangan Nakal!');</script>";
	echo "<script>location='riwayat.php';</script>";
	exit();
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

	<?php include 'menu.php'; ?>

	<div class="container">
		<h2>Konfirmasi Pembayaran</h2>
		<p>Kirim bukti pembayaran Anda disini</p>
		<div class="alert alert-info">Total tagihan Anda <strong>Rp. <?php echo number_format($detpem["total_pembelian"]) ?></strong></div>

		<form method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nama Penyetor</label>
				<input type="text" class="form-control" name="nama_penyetor" required="">
			</div>
			<div class="form-group">
				<label>Bank Transfer</label>
				<input type="text" class="form-control" name="bank_transfer" required="">
			</div>
			<div class="form-group">
				<label>Jumlah Pembayaran</label>
				<input type="number" class="form-control" name="jumlah_pembayaran" value="<?php echo $detpem["total_pembelian"] ?>" >
			</div>
			<div class="form-group">
				<label>Foto Bukti Pembayaran</label>
				<input type="file" class="form-control" name="bukti" required="">
				<p class="text-danger"> Foto bukti harus JPG maksimal 2 MB</p>
			</div>
			<button class="btn btn-primary" name="kirim">Kirim</button>
			<a href="riwayat.php" class="btn btn-warning">Batal</a>
		</form>
	</div>
<br>
<?php
// Jika ada tombol kirim
if (isset($_POST["kirim"])) 
{
	#Upload dulu foto bukti
	$namabukti = $_FILES["bukti"]["name"];
	$lokasibukti =$_FILES["bukti"]["tmp_name"];
	$namafiks = date("YmdHis").$namabukti;
	move_uploaded_file($lokasibukti, "bukti_pembayaran/$namafiks");

	$nama_penyetor = $_POST["nama_penyetor"];
	$bank_transfer = $_POST["bank_transfer"];
	$jumlah_pembayaran = $_POST["jumlah_pembayaran"]; 
	$tanggal_pembayaran = date("Y-m-d");

	$koneksi->query("INSERT INTO pembayaran(id_pembelian,nama_penyetor,bank_transfer, jumlah_pembayaran,tanggal_pembayaran,bukti_pembayaran) VALUES ('$idpem','$nama_penyetor','$bank_transfer','$jumlah_pembayaran','$tanggal_pembayaran','$namafiks')");

	//update dong data pembeliannya dari pending menjadi sudah kirim pembayaran
	$koneksi->query("UPDATE pembelian SET status_pembelian = 'sudah kirim pembayaran' WHERE id_pembelian = '$idpem'");

	echo "<script>alert('Terima kasih sudah mengirimkan bukti pembayaran');</script>";
	echo "<script>location='riwayat.php';</script>";

}
?>

</body>

</html>