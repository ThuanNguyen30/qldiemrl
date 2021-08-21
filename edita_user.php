<?php

include 'db.php';

$username = $_POST['username']; 
$password = $_POST['password']; 
$quyen = $_POST['quyen']; 
$hoten = $_POST['hoten']; 
$ngaysinh = $_POST['ngaysinh']; 
$malop = $_POST['malop'];


$query = "UPDATE users 
	      SET  password='$password',
		  quyen=$quyen,
		  hoten='$hoten',
		  ngaysinh = '$ngaysinh',
		  malop = '$malop'
		  WHERE username = '$username'";

mysqli_query($conexao, $query);

header('location:index.php?pagina=users');