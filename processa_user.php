<?php

include 'db.php';

$username = $_POST['username']; 
$password = $_POST['password']; 
$quyen = $_POST['quyen']; 
$hoten = $_POST['hoten']; 
$ngaysinh = $_POST['ngaysinh']; 
$malop = $_POST['malop'];

$query = "INSERT INTO users(username, password, quyen, hoten, ngaysinh, malop) VALUES ('$username', '$password', $quyen, '$hoten', '$ngaysinh', '$malop')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=users');
