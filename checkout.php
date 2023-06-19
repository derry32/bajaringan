<?php
session_start();
include 'koneksi.php';


//jika tidak ada session pelanggan (blm login) maka dilarikan ke login.php
if (!isset($_SESSION["pelanggan"]))
{
	echo "<script>alert('silahkan login');</script>";
	echo "<script>location='login.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Maduorganik.co.id</title>
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
					
				</tr>
			</thead>
			<tbody>
				<?php $nomor=1; ?>
				<?php $totalbelanja = 0; ?>
				<?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah):?>

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
					
				</tr>
				<?php $nomor++; ?>
				<?php $totalbelanja+=$subharga; ?>
				<?php endforeach ?>
			</tbody>
			<tfoot>
				<tr>
					<th colspan="4">Total Belanja</th>
					<th>Rp. <?php echo number_format($totalbelanja); ?></th>
				</tr>
			</tfoot>
		</table>

		<form method="post">

			<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<input type="text" readonly value="<?php echo $_SESSION["pelanggan"]['nama_pelanggan']?>" class="form-control">
						</div>
							</div>
			<div class="col-md-4">
				<div class="form-group">
					<input type="text" readonly value="<?php echo $_SESSION["pelanggan"]['telepon_pelanggan']?>" class="form-control">
						</div>
							</div>
		
		
							<div class="col-md-4">
		<div class="form-group">
			<!-- <label>Alamat Lengkap Pengiriman</label> -->
			<textarea class="form-control" name="alamat_pengiriman" placeholder="Masukan alamat lengkap(termasuk kode pos)"required></textarea>
		</div>
				</div>
		<button class="btn btn-primary" name="checkout">Checkout</button>
		</div>
	</form>

	<?php
	if (isset($_POST["checkout"])) 
	{
		$id_pelanggan = $_SESSION["pelanggan"]["id_pelanggan"];
		$id_ongkir= 1;
		$tanggal_pembelian = date ("Y-m-d");
		$alamat_pengiriman = $_POST['alamat_pengiriman'];
		$ambil2 = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
		$hasil = $ambil2->fetch_assoc();
		$produk = $hasil['id_produk'];
		


		$total_pembelian = $totalbelanja + $tarif;

		//1.Menyimpan data ke tabel pembelian
		$koneksi->query("INSERT INTO pembelian (id_pelanggan, id_produk, tanggal_pembelian,total_pembelian,alamat_pengiriman)
			VALUES ('$id_pelanggan', '$id_produk', '$tanggal_pembelian','$total_pembelian','$alamat_pengiriman') ");

		//mendapatkan id_pembelian barusan terjadi
		$id_pembelian_barusan = $koneksi->insert_id;
		foreach ($_SESSION["keranjang"] as $id_produk => $jumlah)
		{
			
			$ambil3 = $koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan = '$id_pelanggan'");
			$hasil2 = $ambil3->fetch_assoc();
			$pelanggan = $hasil2['id_pelanggan'];
		

			//Mendapatkan data produk berdasarkan id_produk
			$ambil = $koneksi->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
			$perproduk = $ambil->fetch_assoc();
			$nama = $perproduk['nama_produk'];
			$harga = $perproduk['harga_produk'];
			$berat = $perproduk['berat_produk'];

			$subberat = $perproduk['berat_produk']*$jumlah;
			$subharga = $perproduk['harga_produk']*$jumlah;

			$koneksi->query("INSERT INTO pembelian_produk (id_pembelian, id_produk, id_pelanggan, subharga, jumlah)
				VALUES('$id_pembelian_barusan','$id_produk','$pelanggan','$subharga','$jumlah')");

			//$koneksi->query("INSERT INTO pembelian_produk (id_pembelian,id_produk, id_pelanggan,nama_produk,harga_produk,berat_produk,subberat,subharga,jumlah)
				//VALUES('$id_pembelian_barusan','$id_produk','$pelanggan', '$nama','$harga','$berat','$subberat','$subharga','$jumlah')");

			//skrip update stok produk
			$koneksi->query("UPDATE produk SET stok_produk=stok_produk - $jumlah WHERE id_produk='$id_produk'");
		}
		// mengkosongkan keranjang belanja

		unset($_SESSION["keranjang"]);

		// tampilan dialihkan ke halaman nota, nota dari pembelian barusan

		echo "<script>alert('Pembelian Sukses!');</script>";
		echo "<script>location='nota.php?id=$id_pembelian_barusan';</script>";

	}
	?>
	</div>

</section>

<!----<pre><?php print_r($_SESSION['pelanggan']) ?></pre>--->
<!----<pre><?php print_r($_SESSION["keranjang"]) ?></pre>--->

</body>
<script language="javascript" src="js/jquery.js"></script>
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

  <script>
	$(document).ready(function() {
   $('#provinsi').change(function() { // Jika Select Box id provinsi dipilih
     var provinsi = $(this).val(); // Ciptakan variabel provinsi
     $.ajax({
            type: 'POST', // Metode pengiriman data menggunakan POST
          url: 'kota.php', // File yang akan memproses data
         data: 'nama_prov=' + provinsi, // Data yang akan dikirim ke file pemroses
         success: function(response) { // Jika berhasil
              $('#kota').html(response); // Berikan hasil ke id kota
            }
       });
    });
 
 
 
$(document).ready(function() {
    $('#kota').change(function() { // Jika select box id kota dipilih
     var kota = $(this).val(); // Ciptakan variabel kota
     $.ajax({
            type: 'POST', // Metode pengiriman data menggunakan POST
          url: 'kurir.php', // File pemroses data
           data: 'nama_kota=' + kota, // Data yang akan dikirim ke file pemroses
         success: function(response) { // Jika berhasil
              $('#kurir').html(response); // Berikan hasilnya ke id kurir
           }
       });
    });
   
$(document).ready(function() {
  $('#kurir').change(function() { // Jika select box id kurir dipilih
       var kurir = $(this).val(); // Ciptakan variabel kurir
       var kota = $('#kota').val(); // Ciptakan variabel kota
        $.ajax({
            type: 'POST', // Metode pengiriman data menggunakan POST
          url: 'tarif.php', // File pemroses data
           data: 'kurir=' + kurir + '&kota=' + kota, // Data yang akan dikirim ke file pemroses yaitu ada 2 data
           success: function(response) { // Jika berhasil
              $('#biaya').val(response); // Berikan hasilnya ke id biaya
            }
       });
    });
  });
 
});
});
</script>
</html>