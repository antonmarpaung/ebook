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
    .table {width: 1000px;}
    .table {margin-left: 300px; margin-top: 25px;}
    .keluar{margin-left: 1160px; margin-top: -25px;}
    .btn-success{margin-bottom: -40px;}
</style>
</head>
<body>

<nav class="sidebar">

            <div class="text"><span> <img src="ebook.png" width="50px" height="50px"></span> E-book

            </div>

    <ul>
        <li><a href="HalAdmin.php"><i class="fa-solid fa-house"></i><b><font color="#808080"> Dasboard</font></b></a></li>
        <li>
            <a href="#" class="feat-btn"><i class="fa-solid fa-user"></i>  <?php echo $_SESSION['username1'] ?> 
                <span class="fas fa-caret-down first"></span>   
            </a>
            <ul class="feat-show">
                
                <li><a href="DaftarAdmin.php">Daftar Admin</a></li>
            </ul>
        </li>
        <li>
            <a href="adminbuku.php" class="serv-btn"><i class="fa-solid fa-book"></i> Daftar Buku
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
   
<div class="tambah"><a href="tambahuser.php"><button type="button" class="btn btn-success"><span><i class="fa-solid fa-user-plus"></i></span> Tambah</button></a></div>
    </div>
    <div data-aos="fade-down" data-aos-easing="ease-out-sine" data-aos-duration="1000">
    <font face="monaco"><center><h1 class="text1">ㅤㅤㅤSelamat Datang <?php echo $_SESSION['username1'] ?> </h1></center></font></div>
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

$query = "SELECT * FROM register";
$result = mysqli_query($koneksi, $query);
?>
<div data-aos="fade-up"
     data-aos-anchor-placement="top-bottom"  data-aos-duration="1000">

<table class="table">
  <thead class="table-success">
   <?php  
if (mysqli_num_rows($result) > 0) {
   
    echo "<tr>";
     echo "<th><center>ID</th></center>";
     echo "<th><center>Email</center></th>";
    echo "<th><center>Username</center></th>";
    echo "<th><center>Password</center></th>";
    echo '<th><center>Aksi</center></th>';
    echo "</tr>";
    ?>
  </thead>
  <tbody>
    <?php 
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
         echo "<td><center>USER-" . $row['id'] . "</center></td>";
        echo "<td><center>" . $row['email'] . "</center></td>";
        echo "<td><center>" . $row['username'] . "</center></td>";
        echo "<td><center>" . $row['password'] . "</center></td>";
        "</tr>";
        ?>
       <td> <center><a href="HalAdmin2.php?id=<?= $row["id"]; ?>" ><input type="button" class="btn btn-info" value="Edit"></input> </a>| |   
            <a href="delete.php?id=<?= $row["id"]; ?>"  onclick="return confirm('Apakah Anda yakin ingin menghapus <?php echo $row['username'] ?>?')"><span style="color: #890519;">
    <i class="fa-solid fa-trash fa-xl"></i>
  </span>
</a>

  </span>
</a>
</center></td>
               
         

<?php 

    }
} else {
    echo "Tidak ada data";
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

  
       
        
    