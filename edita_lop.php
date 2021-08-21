<?php

include 'db.php';



$malop = $_POST['malop']; 
$tenlop = $_POST['tenlop'];
$nienkhoa = $_POST['nienkhoa'];
$gvcn = $_POST['gvcn'];
$monday = $_POST['monday'];

$query = "UPDATE lop 
	      SET tenlop='$tenlop',
		  nienkhoa=$nienkhoa,
		  gvcn=$gvcn,
		  monday = $monday
		  WHERE malop = $malop";

mysqli_query($conexao, $query);

header('location:index.php?pagina=lop');