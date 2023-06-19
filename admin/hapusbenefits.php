<?php

$ambil = $koneksi->query("SELECT * FROM baja_benefits WHERE id_benefits='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotoproduk = $pecah['foto_benefits'];
if (file_exists("../foto_benefits/$fotoproduk"))
{
	unlink("../foto_benefits/$fotoproduk");
}

$koneksi->query("DELETE FROM baja_benefits WHERE id_benefits='$_GET[id]'");

echo "<script>alert('Artikel telah terhapus');</script>";
echo "<script>location='index.php?halaman=baja_benefits';</script>";

?>