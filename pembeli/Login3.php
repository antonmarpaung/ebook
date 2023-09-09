<?php 
session_start();

$koneksi = mysqli_connect("localhost", "root", "", "user");

if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $_SESSION['submit'] = $_POST['submit'];

  $query = "SELECT * FROM register WHERE username='$username' AND password='$password'";
  $result = mysqli_query($koneksi, $query);
  
  if(mysqli_num_rows($result) == 1){
    // login berhasil
    $_SESSION['username'] = $username;
    header('location:index.php');
  } else {
    // login gagal
    echo "<script>
        alert('Username Atau Password Salah');
        window.location = 'Login.php'
    </script>";
  }
}


 ?>