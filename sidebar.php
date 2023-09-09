<?php 
include "sambung.php"

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="sidebar2.css">
	<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="https://kit.fontawesome.com/9adbc2840f.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
</head>
<body>

	
	<h1>Selamat Datang Admin </h1>
	<div class="btn">
		<span class="fas fa-bars"></span>
		
	</div>
<nav class="sidebar">
	<div class="text">Sidebar Menu</div>

	<ul>
		<li><a href="#">Dasboard</a></li>
		<li>
			<a href="#" class="feat-btn">features
				<span class="fas fa-caret-down first"></span>
			</a>
			<ul class="feat-show">
				<li><a href="HalAdmin.php">User</a></li>
				<li><a href="#">Element</a></li>
			</ul>
		</li>
		<li>
			<a href="#" class="serv-btn">Services
			<span class="fas fa-caret-down second"></span>
			</a>
			<ul class="serv-show">
				<li><a href="#">pages</a></li>
				<li><a href="#">Element</a></li>
			</ul>
		</li>
		<li><a href="#">pages</a></li>
		<li><a href="#">pages</a></li>
		<li><a href="#">pages</a></li>
	</ul>

</nav>

<script>
	$('.btn').click(function(){
		$(this).toggleClass("click");
	});

	$('.feat-btn').click(function(){
		$('nav ul .feat-show').toggleClass("show");
	});

	$('.serv-btn').click(function(){
		$('nav ul .serv-show').toggleClass("show1");
	});
</script>
</body>
</html>