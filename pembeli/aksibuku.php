<?php

include 'sambung.php';
$nama = $_POST['nambuk'];
$namper = $_POST['nampeng'];
$genre=$_POST['genre'];
$tgl = $_POST['tanggal'];
$harbuk = $_POST['harga'];  
$stokbuk = $_POST ['stock'];



    if(isset($_POST['simpan'])) {
        $file = $_FILES['file']['name'];


        // tempat folder
       $path = $_FILES['file']['tmp_name'];

        // lakukan proses upload
        move_uploaded_file($path, 'gambar/'.$file);


    }

 
mysqli_query($koneksi, "INSERT into jualbuku values('', '$nama', '$namper', '$genre' ,'$file','$tgl', '$harbuk', '$stokbuk')");

echo "<script>window.alert('Data berhasil disimpan')
window.location='adminbuku.php'</script>";


 ?>

