<?php

include 'db.php';

$mahk = $_POST['mahk'];
$tenhk = $_POST['tenhk'];
$namhoc = $_POST['namhoc'];

$query = "UPDATE hocky 
	      SET tenhk='$tenhk',
		  namhoc='$namhoc' 
		  WHERE mahk = '$mahk'";
mysqli_query($conexao, $query);

header('location:index.php?pagina=hocky');