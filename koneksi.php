<?php
$koneksi = new mysqli ("localhost","root","","ngubers");

if(mysqli_connect_error()){
	echo 'Gagal melakukan koneksi ke Database : '.mysqli_connect_error();
}
?>
