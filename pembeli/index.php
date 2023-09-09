<?php 
 session_start();

if(!isset($_SESSION['submit'])){
    header("location:Login.php?pesan=andabelumlogin");
    exit;
}


require "sambung.php";
include 'dataquery.php';
 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="css/index4.css"> 
	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<style>
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Oswald:wght@200&family=Roboto+Slab:wght@500&family=Zen+Dots&display=swap');

</style>
<style>
	.btnlogin{
		margin-left: 300px;
	}
</style>
	<title>E book</title>
</head>
<body>
	<!-- =============================================== BAGIAN NAVBAR ===================================== =-->
	<header><div class="gambar1" style="width:48px;background-color:#ffffff;border-radius: 10px;height: 60px;"><a href="#"><img class="animate__slideInDown" src="img/pola.png" style="width:35px; margin-top: 10px; margin-left: 6.5px;"></div>
	<nav>
		<ul class="order">
			<li><a href="#"><img src="img/ic3.ico"> Beranda</a></li>
			<li><a href="#kat-ter1"> <img src="img/ic2.ico"> Kategori</a></li>
			<li><a href="#gambar-bocah"> <img src="img/ic1.ico"> Informasi</a></li>
		</ul>
	</nav>
	<div class="btnlogin">
	<a href="#"><button class="btn-1"><img src="img/login.png" style="width:30px"> <?php echo $_SESSION['username'] ?> </button></a></div>

	<div class="btnlogout">
	<a href="logout_user.php" onclick="return confirm('Apakah Anda Yakin Ingin Keluar?')"><button class="btn-1"><img src="img/keluar.png" style="width:30px" > Keluar </button></a>
	</header></div>
	

	<div class="kepala-10"></div>
		<div class="kata-1"><b><p>Selamat Datang di E-BOOK tempat pelayanan jual beli buku online murah dan berkualitas  <img src="img/usher.png" style="width:102px"><p></b></div>
			<div class="btn-registari" >
			</div>
			<div class="gambarebook"><img src="img/logoaja.png"  data-aos="fade-up" data-aos-duration="2000" style="width:200px"><h5 data-aos="fade-up" data-aos-duration="2000" class="E-book" style="font-family: Oswald; font-size: 61px">E-BOOK</h5>
			</div>

			<div class="service">
				<h6  data-aos="flip-left"
     data-aos-easing="ease-out-cubic"
     data-aos-duration="2000" style="margin-left: 77px; margin-top: -11px; color: white; font-family: Oswald; position: absolute;">WE ARE ALSO IN :</h6>
		<div class="box"  data-aos="fade-up">
			<div class="col-4">
				<div class="icon"><img src="img/hp.png" style="width:34px; margin-right: 19px;"></div>
				<p style="font-size: 11px; margin-left: -1px; margin-top: -13px; font-family: Oswald; font-size: 14px;">MOBILE</p>
			</div>
			<div class="col-4">
				<div class="icon"><img src="img/WEB.png" style="width:34px; margin-right: 19px;"></div>
				<p style="font-size: 11px; margin-left: 8px; margin-top: -13px; font-family: Oswald; font-size: 14px;">WEB</p>
			</div>
			<div class="col-4">
				<div class="icon"><img src="img/facebook.png" style="width:34px; margin-right: 40px;"></div>
				<p style="font-size: 11px; margin-left: -8px; margin-top: -13px; font-family: Oswald; font-size: 14px;">FACEBOOK</p>
			</div>
			<div class="col-4">
				<div class="icon"><img src="img/instagram.png" style="width:34px; margin-right: 50px;"></div>
				<p style="font-size: 11px; margin-left: -8px; margin-top: -13px; font-family: Oswald; font-size: 14px;">INSTAGRAM</p>
			</div>
		</div>
		
	</div>
			<!-- =============================================== BAGIAN NAVBAR ===================================== =-->

<!-- ============================================ BAGIAN SLIDE BAR% PROMOSI ===================================-->

			<div class="inislide1" id="inislide1"><div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
  		<div class="carousel-indicators">
   		 <button  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    		<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  			</div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/bannera.jpg" style="width:100%" height="380px">
    </div>
    <div class="carousel-item">
      <img src="img/bannerc.jpg" style="width:100%" height="380px">
    </div>
    <div class="carousel-item">
      <img src="img/bannerb.jpg" style="width:100%" height="380px">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
	<div class="promosi1">
	<img src="img/banner 4.jpg" style="width: 160%">
	</div>
	<div class="promosi2">
	<img src="img/banner 5.jpg"style="width: 160%; margin-top: -8%;" >
	</div>
<!-- =============================================== BAGIAN SLDIE PROMOSI ===================================== =-->


<!-- =============================================== BAGIAN LINK ===================================== =-->
<div class="kat-ter1" id="kat-ter1">
			<b><p style="margin-bottom:10px">BEST CATEGORY</p></b>
		</div>
		<div class="icon1" data-aos="fade-up" data-aos-duration="2000">
		<a class="link-1" href="#horor"><img src="img/horror.png" style="width:87px">Horror</a>
		</div>

		<div class="icon2" data-aos="fade-up" data-aos-duration="2000">
		<a class="link-1" href="#sejarah"><img src="img/history-book.png" style="width:87px">Sejarah</a></center>
		</div>

		<div class="icon3" data-aos="fade-up" data-aos-duration="2000">
		<a class="link-1" href="#romantis"><img src="img/adult.png" style="width:87px">Romantis</a></center>
		</div>

		<div class="icon4" data-aos="fade-up" data-aos-duration="2000">
		<a class="link-1" href="#komedi"><img src="img/comedy.png" style="width:87px">Komedi</a></center>
		</div>

		<div class="icon5"data-aos="fade-up" data-aos-duration="2000">
		<a class="link-1" href="#advanture"><img src="img/fairytale.png" style="width:87px">Advanture</a></center>
		</div>
		
		<!-- =============================================== BAGIAN LINK ===================================== =-->


			<!-- =============================================== BAGIAN BUKU ===================================== =-->

	<div class="tam-buku" id="buku">
				<div class="judul-genre">
					<h3>Rekomendasi Buku Anak</h3>
				</div>
				  <div class="isi-tam">
					
						<?php 
					while($buku = mysqli_fetch_array($tampil6)) {
					?>
					<div class="card" style="width: 12rem;" >
  					  <center><img src="img/<?=$buku['gambar']?>" style="width:129px; margin-top:12px" height="189px"></center>
  						<div class="card-body">
    					<p class="card-text" style="font-size: 10px; color:grey;"><?php echo $buku['namapengarang']; ?></p>
    					<h6 class="card-title" style="margin-bottom: 12px;"><?php echo $buku['namabuku']; ?></h6>
    					<b><p style="font-size:14px; color:blue;">Rp. <?php echo number_format($buku['hargabuku']); ?></p></b>
    						<a href="belibuku.php?id=<?php echo $buku['idbuku']; ?>" class = "btn btn-sm btn-primary">Beli</a>
  					</div>
					</div>


				<?php } ?>
						
						/

				</div>
			</div>



			<div class="tam-buku2">
				<div class="judul-genre2">
					<h3>Komik Terbaik</h3>
				</div>
				  <div class="isi-tam2">
						<?php 
					while($buku = mysqli_fetch_array($tampil7)) {
					?>
					<div class="card" style="width: 12rem;" >
  					  <center><img src="img/<?=$buku['gambar']?>" style="width:129px; margin-top:12px" height="189px"></center>
  						<div class="card-body">
    					<p class="card-text" style="font-size: 10px; color:grey;"><?php echo $buku['namapengarang']; ?></p>
    					<h6 class="card-title" style="margin-bottom: 12px;"><?php echo $buku['namabuku']; ?></h6>
    					<b><p style="font-size:14px; color:blue;">Rp. <?php echo number_format($buku['hargabuku']); ?></p></b>
    						<a href="belibuku.php?id=<?php echo $buku['idbuku']; ?>" class = "btn btn-sm btn-primary">Beli</a>
  					</div>
					</div>


				<?php } ?>
					
				</div>
			</div>




			<div class="tam-buku3">
				<div class="judul-genre3">
					<h3>Penuh Drama</h3>
				</div> 
				<div class="isi-tam3">
						<?php 
					while($buku = mysqli_fetch_array($tampil8)) {
					?>
					<div class="card" style="width: 12rem;" >
  					  <center><img src="img/<?=$buku['gambar']?>" style="width:129px; margin-top:12px" height="189px"></center>
  						<div class="card-body">
    					<p class="card-text" style="font-size: 10px; color:grey;"><?php echo $buku['namapengarang']; ?></p>
    					<h6 class="card-title" style="margin-bottom: 12px;"><?php echo $buku['namabuku']; ?></h6>
    					<b><p style="font-size:14px; color:blue;">Rp. <?php echo number_format($buku['hargabuku']); ?></p></b>
    						<a href="belibuku.php?id=<?php echo $buku['idbuku']; ?>" class = "btn btn-sm btn-primary">Beli</a>
  					</div>
					</div>


				<?php } ?>
				</div>
			</div>

			<div class="tam-buku4" id="horor">
				<div class="judul-genre4">
					<h3>Horor</h3>
				</div>
				<div class="isi-tam4">

					<?php 
					while($buku = mysqli_fetch_array($tampil)) {
					?>
					<div class="card" style="width: 12rem;" >
  					  <center><img src="img/<?=$buku['gambar']?>" style="width:129px; margin-top:12px" height="189px"></center>
  						<div class="card-body">
    					<p class="card-text" style="font-size: 10px; color:grey;"><?php echo $buku['namapengarang']; ?></p>
    					<h6 class="card-title" style="margin-bottom: 12px;"><?php echo $buku['namabuku']; ?></h6>
    					<b><p style="font-size:14px; color:blue;">Rp. <?php echo number_format($buku['hargabuku']); ?></p></b>
    						<a href="belibuku.php?id=<?php echo $buku['idbuku']; ?>" class = "btn btn-sm btn-primary">Beli</a>
  					</div>
					</div>


				<?php } ?>
					
				
					

			</div>
		</div>
		<div class="tam-buku5" id="sejarah">
				<div class="judul-genre5">
					<h3>Sejarah</h3>
				</div>
				<div class="isi-tam5">
					<?php 
					while($buku = mysqli_fetch_array($tampil5)) {
					?>
					<div class="card" style="width: 12rem;" >
  					  <center><img src="img/<?=$buku['gambar']?>" style="width:129px; margin-top:12px" height="189px"></center>
  						<div class="card-body">
    					<p class="card-text" style="font-size: 10px; color:grey;"><?php echo $buku['namapengarang']; ?></p>
    					<h6 class="card-title" style="margin-bottom: 12px;"><?php echo $buku['namabuku']; ?></h6>
    					<b><p style="font-size:14px; color:blue;">Rp. <?php echo number_format($buku['hargabuku']); ?></p></b>
    						<a href="belibuku.php?id=<?php echo $buku['idbuku']; ?>" class = "btn btn-sm btn-primary">Beli</a>
  					</div>
					</div>


				<?php } ?>
					

			</div>
		</div>

		<div class="tam-buku6" id="romantis">
				<div class="judul-genre6">
					<h3>Romantis</h3>
				</div>
				<div class="isi-tam6">
					
					<?php 
					while($buku = mysqli_fetch_array($tampil2)) {
					?>
					<div class="card" style="width: 12rem;" >
  					  <center><img src="img/<?=$buku['gambar']?>" style="width:129px; margin-top:12px" height="189px"></center>
  						<div class="card-body">
    					<p class="card-text" style="font-size: 10px; color:grey;"><?php echo $buku['namapengarang']; ?></p>
    					<h6 class="card-title" style="margin-bottom: 12px;"><?php echo $buku['namabuku']; ?></h6>
    					<b><p style="font-size:14px; color:blue;">Rp. <?php echo number_format($buku['hargabuku']); ?></p></b>
    						<a href="belibuku.php?id=<?php echo $buku['idbuku']; ?>" class = "btn btn-sm btn-primary">Beli</a>
  					</div>
					</div>


				<?php } ?>
					

			</div>
		</div>

		<div class="tam-buku7" id="komedi">
				<div class="judul-genre7">
					<h3>Komedi</h3>
				</div>
				<div class="isi-tam7">

						<?php 
					while($buku = mysqli_fetch_array($tampil4)) {
					?>
					<div class="card" style="width: 12rem;" >
  					  <center><img src="img/<?=$buku['gambar']?>" style="width:129px; margin-top:12px" height="189px"></center>
  						<div class="card-body">
    					<p class="card-text" style="font-size: 10px; color:grey;"><?php echo $buku['namapengarang']; ?></p>
    					<h6 class="card-title" style="margin-bottom: 12px;"><?php echo $buku['namabuku']; ?></h6>
    					<b><p style="font-size:14px; color:blue;">Rp. <?php echo number_format($buku['hargabuku']); ?></p></b>
    						<a href="belibuku.php?id=<?php echo $buku['idbuku']; ?>" class = "btn btn-sm btn-primary">Beli</a>
  					</div>
					</div>


				<?php } ?>


			</div>
		</div>

		<div class="tam-buku8" id="advanture">
				<div class="judul-genre8">
					<h3>Advanture</h3>
				</div>
				<div class="isi-tam8">
					
				<?php 
					while($buku = mysqli_fetch_array($tampil3)) {
					?>
					<div class="card" style="width: 12rem;" >
  					  <center><img src="img/<?=$buku['gambar']?>" style="width:129px; margin-top:12px" height="189px"></center>
  						<div class="card-body">
    					<p class="card-text" style="font-size: 10px; color:grey;"><?php echo $buku['namapengarang']; ?></p>
    					<h6 class="card-title" style="margin-bottom: 12px;"><?php echo $buku['namabuku']; ?></h6>
    					<b><p style="font-size:14px; color:blue;">Rp. <?php echo number_format($buku['hargabuku']); ?></p></b>
    						<a href="belibuku.php?id=<?php echo $buku['idbuku']; ?>" class = "btn btn-sm btn-primary">Beli</a>
  					</div>
					</div>


				<?php } ?>

					

			</div>
		</div>


				<!-- =============================================== BAGIAN BUKU ===================================== =-->

				<!-- =============================================== BAGIAN INFORMASI ======================================= =-->

			<div class="bravo-info" id="bravo-info">
				<div class="kat-1" id="kata-1" data-aos="flip-up" data-aos-duration="2000" ><b><p>APASIH E-BOOK ITU? <img src="img/confused.png" style="width : 78px"></p></b></div>
				<div class="kat-2" data-aos="flip-up" data-aos-duration="2000" ><b><p>MENGAPA KALIAN WAJIB MENGGUNAKAN E-BOOK? <img src="img/shrug.png" style="width: 76px"></p></b></div>
			</div>

			<div class="tam-info" id="tam-info2">
					<div class="colok-1" data-aos= "fade-up" data-aos-duration="1000">
						<img src="img/pola.png" style="width: 100%; height: auto;">
					</div>
							<div class="colok-2">
								<b><p>E-BOOK adalah salah satu pelayanan jual beli buku yang terpercaya dan berkualitas.</p></b>
								<p class="par-2">Semua Buku yang kami jual adalah buku asli langsung dari pengarangnya sobat reader. E-book juga sudah memiliki standar penjualan terbaik di indonesia loh. yu tunggu apa lagi gass di borong bukunya </p>
							</div>

			</div>

			<div class="tam-info2">
				<div class="als-1">
					<b><p>E-BOOK Setiap Bulan-nya selalu menghadirkan buku terbaru & dan menghadirkan diskon-diskon terbaik untuk pengguna di setiap bulan-nya
				</p></b>
				<p class="par-2">Kami bekerja sama dengan beberapa brand ternaama seperti gramedia, planet buku, sidu dll
			</p>	
				</div>
				<div class="als-2"  data-aos= "fade-up" data-aos-duration="1000">
					<img src="img/bukua.png" style="width: 120%;">
				</div>
			</div>

			<div class="kal-info" id="kal-info">
				<div class="cup-info" id="cup-info">
				<h2> <img src="img/logoaja.png" style="width: 4%"> Kerja Sama Vendor E-BOOK <img src="img/logoaja.png" style="width: 4%"> </h2>
				</div>

				<div class="gam-info2" data-aos="fade-right" data-aos-offset="100">
					<img src="https://cdn.gramedia.com/uploads/vendor/BRAND_LOGO_100_X_100.png" style="width:20%; height:60%; border-radius: 10px; margin-top: 20px; margin-left:20px">
					<h3 class="gam-text2">Gramedia</h3>
					<p class="gam-text3">Gramedia telah menjalin kerja sama dengan E-BOOK hampir 15 abad lebih</p>
				</div>

				<div class="gam-info2" data-aos="fade-left" data-aos-offset="100" data-aos-duration="600">
					<img src="https://cdn.gramedia.com/uploads/vendor/logo_elex.jpg" style="width:25%; height:60%; border-radius: 10px; margin-top: 20px; margin-left:20px">
					<h3 class="gam-text2">Elex Media</h3>
					<p class="gam-text3">Elex media salah satu vendor terbaik yang bekerja sama dengan E-BOOK</p>
				</div>

				<div class="gam-info2" data-aos="fade-right" data-aos-offset="70" data-aos-duration="600">
					<img src="https://cdn.gramedia.com/uploads/vendor/Logo_BIP.jpeg" style="width:25%; height:60%; border-radius: 10px; margin-top: 20px; margin-left:20px">
					<h3 class="gam-text2">BIP</h3>
					<p class="gam-text3">	E-BOOK juga menjalin kerja sama dengan baik dengan BIP</p>
				</div>

					<div class="gam-info2"data-aos="fade-left" data-aos-offset="70" data-aos-duration="600">
					<img src="https://cdn.gramedia.com/uploads/vendor/kepustakaan-populer-gramedia.jpg" style="width:25%; height:60%; border-radius: 10px; margin-top: 20px; margin-left:20px">
					<h3 class="gam-text2">KPG</h3>
					<p class="gam-text3">Menjual & Menciptakan Kerja sama dengan KPG</p>
				</div>


			</div>

				<div class="gambar-bocah" id="gambar-bocah">
					<div class="zandi" data-aos="fade-up" data-aos-offset="200">
					<img src="img/zandi.png" style="width:320px;">
					</div>
					<div class="abi" data-aos="fade-up" data-aos-offset="280">
					<img src="img/gambar (3).png" style="width:330px;">
					</div>
					<div class="fito" data-aos="fade-up" data-aos-offset="330" >
					<img src="img/abia.png" style="width:390px;">
					</div> 
					<div class="anton" data-aos="fade-up" data-aos-offset="330" >
					<img src="img/gambar (4).png" style="width:290px;">
					</div>
					<div class="jhoni" data-aos="fade-up" data-aos-offset="390">
					<img src="img/jhons.png" style="width:220px;">
					</div>
					
					
				</div>

				<div class="alpa-1">
						<div class="judul-apa">
							<img src="img/logoaja.png" style="width:50px; height: 50px; border-radius: 10px; margin-top: 20px; margin-left:20px" >
							<h2 class="text-2"> E-BOOK</h2>
								<p class="text-1">Terima Kasih kepada Tuhan YME atas berhasilnya launching E-BOOK. semoga bisa menjadi layanan Buku online terbaik di indonesia hingga dunia</p>
						</div>

						<div class="out-1" id="list">
							<h2 class="text-3">OUR SOSMED</h2>
							<ul class="list">
								<li class="li-1"><a style="font-family: signika negative; font-size:20px;" href="https://www.instagram.com/kuboo.ku/?hl=id">@e_book</a></li>
							</ul>&nbsp; &nbsp;
							<ul class="list-1">
								<li class="li-2"><a style="font-family: signika negative; font-size:20px;" href=" https://www.facebook.com/ebook.universitari">E-bookIndonesia</a></li>
							</ul>&nbsp; &nbsp;
							<ul class="list-2">
								<li class="li-3"><a style="font-family: signika negative; font-size:20px;" href="https://www.youtube.com/@KotaroCreative">E-bookIndonesia</a></li>
							</ul>&nbsp; &nbsp;
							<ul class="list-3">
								<li class="li-4"><a style="font-family: signika negative; font-size:20px;" href="https://www.tiktok.com/@bukubakluofficial">e-bookIndo</a></li>
							</ul>
						</div>

							<div class="ourmaster">
								<h2 class="teks-1" style="font-family:signika negative">OUR MASTER</h2>
								<div class="pakmardi">
								<img src="img/pakmardi2.png" style="width:100%">
								</div>
								<p style="font-family:signika negative; font-size:20px">Mardi Yudhi Putra, S.T., M.Kom.</p>
							</div>

				</div>

	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<script>
  AOS.init();
</script>
</body>
</html>