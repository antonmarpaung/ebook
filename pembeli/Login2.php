<?php 

$koneksi = mysqli_connect("localhost", "root", "", "user");


$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$konfirm = $_POST['password2'];
$submit = $_POST['register'];



if(isset($_POST['register'])){
	$id = $_POST['id'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$konfirm = $_POST['password2'];
	
	if($password === $konfirm){
		 echo "<script>
        alert('Akun Berhasil Di Tambahkan');
        window.location = 'Login.php'
    </script>";
  
		$query = "INSERT INTO register VALUES('$id', '$email', '$username', '$password', '$konfirm', '$submit')";
		
		$result = mysqli_query($koneksi, $query);
		
	}else{
		
	}
}






if(isset($_POST['register'])){
  //cek konfirmasi password
  if($password != $konfirm){
    
   echo "<script>
        alert('Konfirmasi Password Salah');
        window.location = 'register.php'
    </script>";
  
   } else {
     echo "<script>
        alert('Akun Berhasil Di Tambahkan');
    header('location:Login.php')";
  }

}


 ?>