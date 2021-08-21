<?php

# Iniciando sessão de login 
session_start(); 

# Base de dados
include 'db.php';

# Cabeçalho
include 'header.php';

# Conteúdo da página
if (isset($_SESSION['login'])) {
	if (isset($_GET['pagina'])) {
		$pagina = $_GET['pagina'];
	}
	else {
		$pagina = 'lop';
	}
}
else {
	$pagina = 'home';
}

switch ($pagina) {
	case 'lop': include 'views/lop.php'; break;
	case 'inserir_lop': include 'views/inserir_lop.php'; break;
	case 'hocky': include 'views/hocky.php'; break;
	case 'inserir_hocky': include 'views/inserir_hocky.php'; break;
	case 'users': include 'views/users.php'; break;
	case 'inserir_user': include 'views/inserir_user.php'; break;
	case 'diemrenluyen': include 'views/diemrenluyen.php'; break;
	case 'inserir_diemrenluyen': include 'views/inserir_diemrenluyen.php'; break;
	case 'import_file': include 'views/import_file.php'; break;
	case 'duyet': include 'views/diemrenluyen_review.php'; break;


	case 'cursos': include 'views/cursos.php'; break;
	case 'alunos': include 'views/alunos.php'; break;
	case 'matriculas': include 'views/matriculas.php'; break;
	case 'inserir_aluno': include 'views/inserir_aluno.php'; break;
	case 'inserir_curso': include 'views/inserir_curso.php'; break;
	case 'inserir_matricula': include 'views/inserir_matricula.php'; break;
	default: include 'views/home.php'; break;
	
}

# Rodapé
include 'footer.php';
