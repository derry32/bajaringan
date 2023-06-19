<h2>Ubah Artikel Baja Benefits</h2>
<?php
$ambil=$koneksi->query("SELECT * FROM baja_benefits WHERE id_benefits='$_GET[id]'");
$pecah= $ambil->fetch_assoc();

//echo "<pre>";
//print_r($pecah);
//echo "</pre>";

?>

<form method="post" enctype="multipart/form-data">
<div class="form-group">
	<label>Ubah Judul Artikel</label>
	<input type="text" class="form-control" name="judul" value="<?php echo $pecah['judul_benefits'];?>">
</div>
<dir class="form-group">
	<label>Ubah Foto</label>
	<input type="file" name="foto" class="form-control">	
</dir>
<dir class="form-group">
	<label>Ubah Deskripsi</label>
	<textarea name="deskripsi" class="form-control" rows="10"><?php echo $pecah['deskripsi_benefits'];?>
	</textarea>
</dir>
<button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah'])) 
{
	$namafoto=$_FILES['foto']['name'];
	$lokasifoto = $_FILES['foto']['tmp_name'];
	// jk foto dirubah
	if (!empty($lokasifoto))
	{
		move_uploaded_file($lokasifoto, "../foto_benefits/$namafoto");
		$koneksi->query("UPDATE baja_benefits SET judul_benefits='$_POST[judul]', foto_benefits='$namafoto',deskripsi_benefits='$_POST[deskripsi]' WHERE id_benefits='$_GET[id]'");
	}
	else
	{
		$koneksi->query("UPDATE baja_benefits SET judul_benefits='$_POST[judul]', deskripsi_benefits='$_POST[deskripsi]' WHERE id_benefits='$_GET[id]'");
	}
	echo "<script>alert('data artikel telah diperbaharui');</script>";
	echo "<script>location='index.php?halaman=baja_benefits';</script>";
}
?>