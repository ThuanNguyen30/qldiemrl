<?php

include 'db.php';

$username = $_POST['idp'];
$thang = $_POST['thang']; 
$hocky = $_POST['hocky']; 
$namhoc = $_POST['namhoc']; 
$tongtct1 = $_POST['tongtct1']; 
$tongtcc1 = $_POST['tongtcc1'];
$tongdiem = $_POST['tongdiem'];


$query = "INSERT INTO diemrenluyen(username, tcc1, tct1, tongdiem, thang, hocky, namhoc) VALUES('$username', $tongtcc1,$tongtct1,$tongdiem,$thang, '$hocky', '$namhoc')";

mysqli_query($conexao, $query);

header("location:index.php?pagina=diemrenluyen");