
<?php 

include "sambung.php";
$id = $_GET['id'];


$row = mysqli_query($koneksi, "SELECT * FROM jualbuku WHERE idbuku 	= $id");
$result = mysqli_fetch_array($row);



 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<form action="editbuku2.php" method="POST">
	<style>
		.mx-auto{width: 1000px; margin-top: 25px;}

	</style>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<body>
	<div class="mx-auto">
<div class="card">
  <center><h5 class="card-header">Edit Buku</h5></center>
<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">ㅤID</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="id"  readonly class="form-control-plaintext" value="<?php echo $result['idbuku'] ?>" autocomplete="off" name="idbuku">
    </div>
     </div>

<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">ㅤNama Buku</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="namabuku" placeholder="Email" autocomplete="off" value="<?php echo $result['namabuku'] ?>" name="namabuku">
    </div>
    
</div>
    <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">ㅤNama Pengarang</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="username" placeholder="Username" autocomplete="off" value="<?php echo $result['namapengarang'] ?>" name="namapengarang">
    </div>	

  </div>

<div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">ㅤTanggal Rilis</label>
    <div class="col-sm-10">
      <input type="date"  class="form-control" id="username" placeholder="Username" autocomplete="off" value="<?php echo $result['tglrilis'] ?>" name="tglrilis">
    </div>  
  </div>

  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">ㅤHarga Buku</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="username" placeholder="Username" autocomplete="off" value="<?php echo $result['hargabuku'] ?>" name="hargabuku" > 
    </div>  
  </div>

  <div class="mb-3 row">
    <label for="staticEmail" class="col-sm-2 col-form-label">ㅤStock</label>
    <div class="col-sm-10">
      <input type="text"  class="form-control" id="username" placeholder="Username" autocomplete="off" value="<?php echo $result['stock'] ?>" name="stock">
    </div>  

  </div>

</div>
</div>
<div class="mx-auto">
<input type="submit" class="btn btn-outline-success" id="edit" value="Update" onclick="return confirm('Apakah Anda yakin ingin Merubah Data?')"></input> 
</div>



</body>
</html>