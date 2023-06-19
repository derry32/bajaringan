<?php include 'koneksi.php'; ?>
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
</head>
<body>

<?php include 'menu.php'; ?>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2 ">
				<div class="panel panel-default">
					<div class="panel-heading">
					<h3 class="panel-title">Daftar Pelanggan </h3>
			</div>
			<div class="panel-body">
				<form method="post" class="form-horizontal">
					<div class="form-group">
						<label class="control-label col-md-3">Nama Lengkap</label>
						<div class="col-md-7">
							<input type="text" class="form-control" name="nama" required>
					</div>
				</div>
				<div class="form-group">
						<label class="control-label col-md-3">E-mail</label>
						<div class="col-md-7">
							<input type="email" class="form-control" name="email" placeholder = "password 8 digit" required>
					</div>
				</div>
				<div class="form-group">
						<label class="control-label col-md-3">Password</label>
						<div class="col-md-7">
							<input type="password" pattern=".{8,8}" required title="Masukkan 8 karakter" class="form-control" name="password">
				</div>
				<div class="form-group">
						<label class="control-label col-md-3">Alamat Lengkap</label>
						<div class="col-md-7">
							<textarea class="form-control" name="alamat" required></textarea>
					</div>
				</div>
				<div class="form-group">
						<label class="control-label col-md-3">No.Hp/Telepon</label>
						<div class="col-md-7">
							<input type="text" class="form-control" name="telepon" required>
					</div>
				</div>
				<div class="form-group">
						<div class="col-md-7 col-md-offset-3">
							<button class="btn btn-primary" name="daftar">Daftar</button>
					</div>
				</div>
			</form>
			
			<?php
			// Jika ada tombol daftar(ditekan tombol daftar)
			if (isset($_POST["daftar"]))
			{
				// Mengambil isian nama, email, password, alamat dan telepon
				$nama = $_POST["nama"];
				$email = $_POST["email"];
				$password = $_POST["password"];
				$alamat = $_POST["alamat"];
				$telepon = $_POST["telepon"];

				//cek apakah email sudah digunakan orang lain
				$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email'");
				$yangcocok = $ambil->num_rows;
				if ($yangcocok==1)
				{
					echo "<script>alert('Pendaftaran gagal, Email sudah digunakan');</script>";
					echo "<script>location='daftar.php';</script>";
				}
				else
				{
				// query insert ke tabel pelanggan
					$koneksi->query("INSERT INTO pelanggan (email_pelanggan,password_pelanggan,nama_pelanggan,telepon_pelanggan,alamat_pelanggan)
						VALUES('$email','$password','$nama','$telepon','$alamat')");
					echo "<script>alert('pendaftaran sukses, silahkan login'); </script>";
					echo "<script>location='login.php';</script>";

				}
				
			}
			?>
		</div>
	</div>
</div>
</div>
</div>
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