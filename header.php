<!DOCTYPE html>
<html>
<head>
	<title>Điểm Rèn Luyện</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href='https://fonts.googleapis.com/css?family=Bree+Serif' rel='stylesheet'>
	<link rel="stylesheet" href="css/footer-template/footer-distributed.css">
</head>

<body>
	<header>
		<div class="container">
			<a href="logout.php"><img src="img/rsqh.png" title="Logo" alt="Logo" width="100px"></a>
			<div id="menu">
				<!--Thuan add-->
				<?php $quyen = $_SESSION['quyen'];
					  if ($quyen == 0) {
				?>
					
					<a class="fa fa-book" href="?pagina=diemrenluyen">&nbsp&nbspĐiểm rèn luyện</a>
				<?php } elseif ($quyen == 1) {
				?>
				<a class="fa fa-book" href="?pagina=duyet">&nbsp&nbspReview</a>
					
				<?php } else {
				?>
				<a class="fa fa-book" href="?pagina=lop">&nbsp&nbspClass</a>
				<a class="fa fa-book" href="?pagina=hocky">&nbsp&nbspSemester</a>
				<a class="fa fa-book" href="?pagina=users">&nbsp&nbspUsers</a>
				<a class="fa fa-book" href="?pagina=diemrenluyen">&nbsp&nbspĐiểm rèn luyện</a>

				<?php } 
				?>


				<?php if (isset($_SESSION['login'])) { 
				?>
				<a class="fa fa-sign-out-alt" href="logout.php">&nbsp&nbsp<?php echo $_SESSION['username']; ?>
					
				</a>
				<?php } 
				?>

			</div>
		</div>
	</header>

	<div id="conteudo" class="container">
		
	
