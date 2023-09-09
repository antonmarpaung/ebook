
<?php 
session_start();

if(!isset($_SESSION['submit'])){
    header("location:LoginAdmin.php?pesan=andabelumlogin");
    exit;
}


include "sambung.php";



 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<form action="tambahuser2.php" method="POST">
	<style>
		.mx-auto{width: 1000px; margin-top: 25px;} 
    .mb-3 {width: 1000px;}

	</style>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<body>
	<div class="mx-auto">
<div class="card">
  <center><h5 class="card-header">Tambah Data</h5></center>
<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">ㅤID</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="id"  readonly class="form-control-plaintext" placeholder="ID (Auto)" autocomplete="off" name="id">
    </div>
     </div>

<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">ㅤEmail</label>
    <div class="col-sm-10">
      <input type="email"  class="form-control" id="username" placeholder="Email" autocomplete="off" name="email" required autocomplete="off">
    </div>
    
</div>
    <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">ㅤUsername</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="username" placeholder="Username" autocomplete="off" name="username" required oninvalid="this.setCustomValidity('Mohon Di Isi Minimal 6 Karakter')" oninput="this.setCustomValidity('')" minlength="6"> 
    </div>	

  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">ㅤPassword</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword" placeholder="Password" autocomplete="off" name="password" required oninvalid="this.setCustomValidity('Mohon Di Isi Minimal 8 Karakter')" oninput="this.setCustomValidity('')" minlength="8">  
    </div>
     </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">ㅤKonfirmasi </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword" placeholder="Konfirmasi Password" autocomplete="off" name="password2" required oninvalid="this.setCustomValidity('Mohon Di Isi Minimal 8 Karakter')" oninput="this.setCustomValidity('')" minlength="8">  
    </div>
  </div>
</div>
</div>
<div class="mx-auto">
<button type="submit" name="register" class="btn btn-outline-success" value=<?php echo date ("Y-m-d ") ?> >Tambah</button>
</div>
</body>
</html>
