<?php 		
include "sambung.php";

$id = $_POST['id'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

	mysqli_query($koneksi, "UPDATE register SET email ='$email', username = '$username', password = '$password' where id = '$id'");
	 

header("location:HalAdmin.php")

 ?>