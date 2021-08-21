<?php

include 'db.php';

$username = $_GET['username'];

$query = "DELETE FROM users
		  WHERE username = '$username'";

mysqli_query($conexao, $query);

header('location:index.php?pagina=users');