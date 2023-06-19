<h2> Baja Benefits</h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Judul</th>
			<th>Foto</th>
			<th>Deskripsi</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM baja_benefits"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
	<tr>
		<td><?php echo $nomor; ?></td>
		<td><?php echo $pecah['judul_benefits']; ?></td>
		<td>
			<img src="../foto_benefits/<?php echo $pecah['foto_benefits']; ?>" width="100">
		</td>
		<td><?php echo $pecah['deskripsi_benefits']; ?></td>
		<td>
			<a href="index.php?halaman=hapusbenefits&id=<?php echo $pecah['id_benefits'];?>" class="btn-danger btn">Hapus</a>
			<a href="index.php?halaman=ubahbenefits&id=<?php echo $pecah['id_benefits'];?>" class="btn btn-warning">Ubah</a>
		</td>
	</tr>
	<?php $nomor++; ?>
	<?php } ?>
</tbody>
</table>
<a href="index.php?halaman=tambahbenefits" class="btn btn-primary">Tambah Artikel</a>