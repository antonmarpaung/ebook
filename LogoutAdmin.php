<?php 

session_start();
session_destroy();

header("location:LoginAdmin.php?pesan=logout");
exit;

 ?>