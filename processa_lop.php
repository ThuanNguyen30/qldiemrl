<?php

include 'db.php';

$malop = $_POST['malop']; // Mesmo nome que ta no name do form
$tenlop = $_POST['tenlop'];
$nienkhoa = $_POST['nienkhoa'];
$gvcn = $_POST['gvcn'];
$monday = $_POST['monday'];

$query = "INSERT INTO lop(malop, tenlop, nienkhoa, gvcn, monday) VALUES('$malop', '$tenlop','$nienkhoa','$gvcn','$monday')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=lop');


