<?php 
session_start();

if(!isset($_SESSION['submit'])){
    header("location:LoginAdmin.php?pesan=andabelumlogin");
    exit;
}



require "sambung.php"
 ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous" />

<!-- lin aos -->

<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<!--  -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>

<!-- link sweetalert -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">

<!-- font awesome  -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="admin.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9adbc2840f.js" crossorigin="anonymous"></script>
<style>
    .table {width: 1190px;}
    .table {margin-left: 240px; margin-top: 15px;}
    .keluar{margin-left: 1140px; margin-top: -20px;}
    .btn-success{margin-bottom: -30px;}

</style>
</head>
<body>

<nav class="sidebar">

            <div class="text"><span> <img src="ebook.png" width="50px" height="50px"></span> E-book

            </div>

    <ul>
        <li><a href="HalAdmin.php"><i class="fa-solid fa-house"></i> Dasboard</a></li>
        <li>
            <a href="#" class="feat-btn"><i class="fa-solid fa-user"></i>  <?php echo $_SESSION['username1'] ?> 
                <span class="fas fa-caret-down first"></span>
            </a>
            <ul class="feat-show">
                
                <li><a href="DaftarAdmin.php">Daftar Admin</a></li>
            </ul>
        </li>
        <li>
            <a href="#" class="serv-btn"><i class="fa-solid fa-book"></i> <b><font color="#808080">  Daftar Buku</font></b>
            </a>
        </li>
        <li><a href="pelanggan/pelanggan1.php"><i class="fa-sharp fa-solid fa-users"></i> Pelanggan</a></li>
        <li><a href="TambahAdmin.php"><i class="fa-sharp fa-solid fa-user-secret"></i> Create New Admin</a></li>
        <li><a href="infotimkami/infotimkami.php"><i class="fa-solid fa-people-group"></i> Info Tim Kami</a></li>
    </ul>

</nav>
</div>
<script>

    $('.feat-btn').click(function(){
        $('nav ul .feat-show').toggleClass("show");
    });

    $('.serv-btn').click(function(){
        $('nav ul .serv-show').toggleClass("show1");
    });
</script>
   
<div class="tambah"><a href="ProjectBesarPWD/jualbuku.php"><button type="button" class="btn btn-success"><span><i class="fa-solid fa-user-plus"></i></span> Tambah</button></a></div>
    </div>
    <div data-aos="fade-down" data-aos-easing="ease-out-sine" data-aos-duration="1000">
    <font face="monaco"><center><h1 class="text1">ㅤㅤㅤSelamat Datang <?php echo $_SESSION['username1'] ?></h1></center></font></div>
    <div class="keluar"> <a href="LogoutAdmin.php" onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')">    <button type="button" class="btn btn-danger">
<i class="fa-solid fa-right-from-bracket fa-sm" ></i>Keluar</button></a></div> 
    <?php
//koneksi ke database
$koneksi = mysqli_connect("localhost","root","","user");

//mengecek koneksi
if(!$koneksi){
    die("Koneksi gagal:".mysqli_connect_error());
}

//mengambil data dari database

$query = "SELECT * FROM jualbuku";
$result = mysqli_query($koneksi, $query);
?>
<div data-aos="fade-up"
     data-aos-anchor-placement="top-bottom"  data-aos-duration="1000">

     <table class="table">
  <thead class="table-success">
   <?php  
if (mysqli_num_rows($result) > 0) {
   
    echo "<tr>";
     echo "<th><center>ID Buku</th></center>";
     echo "<th><center>Nama Buku</center></th>";
    echo "<th><center>Nama Pengarang</center></th>";
     echo "<th><center>Genre</center></th>";
    echo "<th><center>Tanggal Rilis</center></th>";
    echo "<th><center>Harga</center></th>";
    echo '<th><center>Stock</center></th>';
    echo '<th><center>Cover</center></th>';
    echo '<th><center>Aksi</center></th>';

    echo "</tr>";
}
    ?>
  </thead>
    

                </tr>
  <tbody>
    <?php 
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
         echo "<td><center>" . $row['idbuku'] . "</center></td>";
        echo "<td><center>" . $row['namabuku'] . "</center></td>";
        echo "<td><center>" . $row['namapengarang'] . "</center></td>";
        echo "<td><center>" . $row['Genre'] . "</center></td>";
?>
<?php 
        echo "<td><center>" . $row['tglrilis'] . "</center></td>";
        echo "<td><center>Rp.".number_format($row['hargabuku']). ",-</center></td>";
        echo "<td><center>" . $row['stock'] . "</center></td>";
?>
<td><center><img src="pembeli/img/<?=$row['gambar']?>" width="60px"></center></td>
        
<?php 

        "</tr>"; ?>
        

       <td> <center><a href="editbuku.php?id=<?= $row["idbuku"]; ?>" ><input type="button" class="btn btn-info" value="Edit"></input> </a>| |   
            <a href="deletebuku.php?id=<?= $row["idbuku"]; ?>"  onclick="return confirm('Apakah Anda yakin ingin menghapus <?php echo $row['namabuku'] ?>?')"><span style="color: #890519;">
    <i class="fa-solid fa-trash fa-xl"></i>
  </span>
</a>


</center></td>
               
         </tr>

<?php 

    
} 

//menutup koneksi
mysqli_close($koneksi);
?>
  </tbody>
  </div>
</table>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>


<script type="text/javascript">
 





</script>

 <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>
</html>

  
       
        
    