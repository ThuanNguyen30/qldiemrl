<?php

include 'db.php';

$mahk = $_GET['mahk'];

$query = "DELETE FROM hocky
		  WHERE mahk = '$mahk'";

mysqli_query($conexao, $query);

header('location:index.php?pagina=hocky');