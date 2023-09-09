<?php 
session_start();

$koneksi = mysqli_connect("localhost", "root", "", "user");

if(isset($_POST['submit'])){
  $username1 = $_POST['username1'];
  $password = $_POST['password'];

  $_SESSION['submit'] = $_POST['submit'];
  
  $query = "SELECT * FROM admin WHERE username='$username1' AND password='$password'";
  $result = mysqli_query($koneksi, $query);
  
  if(mysqli_num_rows($result) == 1){
    // login berhasil
    $_SESSION['username1'] = $username1;
    header('location:HalAdmin.php');
  } else {
    // login gagal
    echo "<script>
        alert('Username Atau Password Salah');
        window.location = 'LoginAdmin.php'
    </script>";
  }
}


 ?>