<?php

include 'db.php';
/*
$usuario = addslashes($_POST['usuario']);
//$senha = md5($_POST['senha']);
$senha = $_POST['senha'];

$query = "SELECT * FROM USUARIOS
		  WHERE USUARIO = '$usuario'
		  AND senha = '$senha'";



$consulta = mysqli_query($conexao, $query);

if (mysqli_num_rows($consulta) == 1) {

	session_start();
	$_SESSION['login'] = true;
	$_SESSION['usuario'] = $usuario;

	header('location:index.php');
}
else {
	header('location:index.php?erro');
}
*/
$usuario = addslashes($_POST['username']);
$senha = $_POST['password'];

$query = "SELECT * FROM users
		  WHERE username = '$usuario'
		  AND password = '$senha'";



$consulta = mysqli_query($conexao, $query);

if (mysqli_num_rows($consulta) == 1) {

	session_start();
	$_SESSION['login'] = true;
	$_SESSION['username'] = $usuario;
	$data = mysqli_fetch_row($consulta);
	$_SESSION['quyen'] = $data[2];

	header('location:index.php');
}
else {
	header('location:index.php?erro');
}