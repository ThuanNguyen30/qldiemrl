<?php

include 'db.php';

$username = $_SESSION['username']; 
$thang = $_POST['thang']; 
$hocky = $_POST['hocky']; 
$namhoc = $_POST['namhoc']; 
$tongtct1 = $_POST['tongtct1']; 
$tongtcc1 = $_POST['tongtcc1'];


$query = "UPDATE diemrenluyen 
	      SET  thang='$thang',
		  hocky=$hocky,
		  namhoc='$namhoc',
		  tongtct1 = '$tongtct1',
		  tongtcc1 = '$tongtcc1'
		  WHERE username = '$username'";

mysqli_query($conexao, $query);

header('location:index.php?pagina=diemrenluyen');