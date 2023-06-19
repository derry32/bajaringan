<h2>Data Pembayaran</h2>

<?php
// Mendapatkan id_pembelian dari url
$id_pembelian = $_GET['id'];

//Mengambil data pembayaran berdasarkan id_pembelian
$ambil = $koneksi->query("SELECT * FROM pembayaran WHERE id_pembelian='$id_pembelian'");
$detail = $ambil->fetch_assoc();

//echo "<pre>";
//print_r($detail);
//echo "</pre>";
?>

<div class="row">
	<div class="col-md-6">
		<table class="table">
			<tr>
				<th>Nama Pelanggan</th>
				<td><?php echo $detail['nama_penyetor'] ?></td>
			</tr>
			<tr>
				<th>Bank</th>
				<td><?php echo $detail['bank_transfer'] ?></td>
			</tr>
			<tr>
				<th>Jumlah</th>
				<td>Rp. <?php echo number_format($detail['jumlah_pembayaran']) ?></td>
			</tr>
				<th>Tanggal Pembelian</th>
				<td><?php echo $detail['tanggal_pembayaran'] ?></td>
			</tr>
		</table>
	</div>
	<div class="col-md-6">
		<img src="../bukti_pembayaran/<?php echo $detail['bukti_pembayaran'] ?>" alt="" class="img-responsive">
	</div>
</div>

<form method="post">
	<div class="form-group">
		<label>No. Resi Pengiriman</label>
		<input type="text" class="form-control" name="resi">
	</div>
	<div class="form-group">
		<label>Status</label>
		<select class="form-control" name="status">
			<option value="">Pilih Status</option>
			<option value="Dikemas">Dikemas</option>
			<option value="Barang Dikirim">Barang Dikirim</option>
			<option value="Batal">Dibatalkan</option>
			<option value="Pembelian Sukses">Pembelian Sukses</option>
		</select>
	</div>
	<button class="btn btn-primary" name="proses">Proses</button>
</form>

<?php
if (isset($_POST["proses"])) 
{
	$resi = $_POST["resi"];
	$status = $_POST["status"];
	$koneksi->query("UPDATE pembelian SET resi_pengiriman = '$resi',status_pembelian='$status' WHERE id_pembelian = '$id_pembelian'");

	echo "<script>alert('Data pembelian terupdate');</script>";
	echo "<script>location='index.php?halaman=pembelian';</script>";
}
?>