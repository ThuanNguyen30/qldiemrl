<?php

include 'db.php';

$mahk = $_POST['mahk']; // Mesmo nome que ta no name do form
$tenhk = $_POST['tenhk'];
$namhoc = $_POST['namhoc'];

$query = "INSERT INTO hocky(mahk, tenhk, namhoc) VALUES('$mahk', '$tenhk','$namhoc')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=hocky');


