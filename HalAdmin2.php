
<?php 

include "sambung.php";
$id = $_GET['id'];


$row = mysqli_query($koneksi, "SELECT * FROM register WHERE id 	= $id");
$result = mysqli_fetch_array($row);



 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<form action="HalAdmin3.php" method="POST">
	<style>
		.mx-auto{width: 1000px; margin-top: 25px;}

	</style>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<body>
	<div class="mx-auto">
<div class="card">
  <center><h5 class="card-header">Edit Data</h5></center>
<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">ㅤID</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="id"  readonly class="form-control-plaintext" value="<?php echo $result['id'] ?>" autocomplete="off" name="id">
    </div>
     </div>

<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">ㅤEmail</label>
    <div class="col-sm-10">
      <input type="email"  class="form-control" id="username" placeholder="Email" autocomplete="off" value="<?php echo $result['email'] ?>" name="email">
    </div>
    
</div>
    <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">ㅤUsername</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="username" placeholder="Username" autocomplete="off" value="<?php echo $result['username'] ?>" name="username">
    </div>	

  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">ㅤPassword</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputPassword" placeholder="Password" autocomplete="off" value="<?php echo $result['password'] ?>" name="password">  
    </div>
  </div>
</div>
</div>
<div class="mx-auto">
<input type="submit" class="btn btn-outline-success" id="edit" value="Update" onclick="return confirm('Apakah Anda yakin ingin Merubah Data?')"></input> 
</div>



</body>
</html>