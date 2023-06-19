<h2> Detail Pembelian Sukses </h2>
<?php 
$ambil = $koneksi->query("SELECT * FROM pembelian_sukses JOIN pelanggan 
	ON pembelian_sukses.id_pelanggan=pelanggan.id_pelanggan
	WHERE pembelian_sukses.id_pembelian='$_GET[id]'"); 
$detail = $ambil->fetch_assoc();
?>
<!--<pre><?php //print_r($detail); ?></pre>-->
<div class="row">
	<div class="col-md-4">
		<h4><b>Pembelian</h4></b>
		<p>
		<h5>Tanggal : <?php echo $detail['tanggal_pembelian']; ?> <br>
		Total : <?php echo number_format($detail['total_pembelian']); ?> <br>
		Status : <?php echo $detail ["status_pembelian"]; ?></h5>
		</p>
	</div>
	<div class="col-md-4">
	<h4><b>Pelanggan</h4></b>
		<p>
		<h5><?php echo $detail['nama_pelanggan']; ?><br>
		<?php echo $detail['telepon_pelanggan']; ?> <br>
		<?php echo $detail['email_pelanggan']; ?></h5>
		</p>
	</div>
	<div class="col-md-4">
		<h4><b>Pengiriman</h4></b>
		<p>
		Alamat : <?php echo $detail["alamat_pengiriman"] ?></h5>
		</p>
	</div>
</div>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama Produk</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Subtotal</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil =$koneksi->query("SELECT * FROM pembelian_produk JOIN produk ON pembelian_produk.id_produk=produk.id_produk
	WHERE pembelian_produk.id_pembelian='$_GET[id]'"); ?>
	<?php while($pecah=$ambil->fetch_assoc()) {?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_produk'];?></td>
			<td>Rp. <?php echo number_format($pecah['harga_produk']);?></td>
			<td><?php echo $pecah['jumlah'];?></td>
			<td>
				Rp. <?php echo number_format($pecah['harga_produk']*$pecah['jumlah']);?>
			</td>
		</tr>
		<?php $nomor++; ?>
	<?php } ?>
	</tbody>
</table>