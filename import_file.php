
<?php

include 'db.php';


if(isset($_POST["submit_file"]))
{
 $file = $_FILES["file"]["tmp_name"];
 $file_open = fopen($file,"r");
 while(($csv = fgetcsv($file_open, 1000, ",")) !== false)
 {

    $username =  $csv[0];
    $password =  $csv[1];
    $quyen =  $csv[2];
    $hoten =  $csv[3];
    $ngaysinh =  $csv[4];
    $malop =  $csv[5];

    $query = "INSERT INTO users(username, password, quyen, hoten, ngaysinh, malop) VALUES ('$username', '$password', $quyen, '$hoten', '$ngaysinh', '$malop')";
    mysqli_query($conexao, $query);
    header('location:index.php?pagina=users');

 }
}
?>
