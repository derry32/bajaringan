<?php  
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "readmore";
 
	$conn = mysqli_connect($servername,$username,$password,$dbname );
 
	/** Cek Koneksi **/
	if(!$conn){
	    die("connection failed: ".mysqli_connect_error());
	}
?>
