<?php 
$koneksi = mysqli_connect("localhost", "root", "", "bukubertia");

if (mysqli_connect_errno()){
	echo "Gagal koneksi Database:".mysqli_connect_errno();
 }
 ?>
