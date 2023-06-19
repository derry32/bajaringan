<h2>Tambah Artikel Baja Benefits</h2>

<form method="post" enctype="multipart/form-data">
<div class="form-group">
	<label>Judul Artikel</label>
	<input type="text" class="form-control" name="judul">
</div>
<div class="form-group">
	<label>Foto Artikel</label>
	<input type="file" class="form-control" name="foto">
</div>
<div class="form-group">
	<label>Deskripsi Artikel</label>
	<textarea class="form-control" name="deskripsi" rows="10"></textarea>
</div>
<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php
if (isset($_POST['save']))
{
	$nama = $_FILES['foto']['name'];
	$lokasi =$_FILES['foto']['tmp_name'];
	move_uploaded_file($lokasi, "../foto_benefits/".$nama);
	$koneksi->query("INSERT INTO baja_benefits
	(judul_benefits, foto_benefits, deskripsi_benefits)
	VALUES('$_POST[judul]','$nama','$_POST[deskripsi]')");
	echo "<div class='alert alert-info'>Data tersimpan </div>";
	echo"<meta http-equiv='refresh' content='1;url=index.php?halaman=baja_benefits'>";
}
?>