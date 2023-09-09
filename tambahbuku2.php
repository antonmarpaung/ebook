<?php 		
include "sambung.php";

$idbuku = $_POST['idbuku'];
$namabuku = $_POST['namabuku'];
$namapengarang = $_POST['namapengarang'];
$tglrilis = $_POST['tglrilis'];
$harga = $_POST['harga'];
$stock = $_POST['stock'];

	mysqli_query($koneksi, "INSERT INTO jualbuku VALUES('$idbuku', '$namabuku', '$namapengarang', '$tglrilis', '$harga', '$stock')");

	
  
  echo "<script>
        alert('Akun Berhasil Di Tambahkan');
    window.location = 'adminbuku.php'
    </script>";
	 



 ?>