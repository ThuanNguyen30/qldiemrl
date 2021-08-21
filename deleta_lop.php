<?php

include 'db.php';

$malop = $_GET['malop'];

$query = "DELETE FROM lop
		  WHERE malop = '$malop'";

mysqli_query($conexao, $query);

header('location:index.php?pagina=lop');