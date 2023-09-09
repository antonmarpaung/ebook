
<?php       
include "sambung.php";

$idadmin = $_POST['idadmin'];
$usernameadmin = $_POST['usernameadmin'];
$passwordadmin = $_POST['passwordadmin'];
$passwordadmin2 = $_POST['passwordadmin2'];


    mysqli_query($koneksi, "INSERT INTO admin VALUES('$idadmin', '$usernameadmin', '$passwordadmin')");

    if($passwordadmin != $passwordadmin2){
    
   echo "<script>
        alert('Konfirmasi Password Salah');
        window.location = 'TambahAdmin.php'
    </script>";
  
   } else {
     echo "<script>
        alert('Akun Berhasil Di Tambahkan');
    window.location = 'HalAdmin.php'
    </script>";
  }
     



 ?>

