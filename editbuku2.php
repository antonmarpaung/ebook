<?php 		
include "sambung.php";

$idbuku = $_POST['idbuku'];
$namabuku = $_POST['namabuku'];
$namapengarang = $_POST['namapengarang'];
$tglrilis = $_POST['tglrilis'];
$hargabuku = $_POST['hargabuku'];
$stock = $_POST['stock'];

	mysqli_query($koneksi, "UPDATE jualbuku SET namabuku ='$namabuku', namapengarang = '$namapengarang', tglrilis = '$tglrilis', hargabuku = '$hargabuku',stock = '$stock' where idbuku = '$idbuku'");
	 

header("location:adminbuku.php")

 ?>