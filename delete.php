<?php 
$id = $_GET['id'];

require 'sambung.php';

if (hapus($id) > 0){
	echo"
	<script> 
	alert('Data Berhasil Dihapus');
	document.location.href	 = 'HalAdmin.php';
	</script>";
}



 ?>