<?php 		
include "sambung.php";

$id = $_POST['id'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$konfirm = $_POST['password2'];
$submit = $_POST['register'];

	mysqli_query($koneksi, "INSERT INTO register VALUES('$id', '$email', '$username', '$password', '$konfirm', '$submit')");

	if($password != $konfirm){
    
   echo "<script>
        alert('Konfirmasi Password Salah');
        window.location = 'tambahuser.php'
    </script>";
  
   } else {
     echo "<script>
        alert('Akun Berhasil Di Tambahkan');
    window.location = 'HalAdmin.php'
    </script>";
  }
	 



 ?>