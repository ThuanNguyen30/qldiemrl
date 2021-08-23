<?php
//NGUYEN QUANG THUAN
$servidor = "localhost";
$usuario = "root";
$senha = "";
$database = "qldrenluyen";

$conexao = mysqli_connect($servidor, $usuario, $senha, $database);


// Carregando cursos
$query = "SELECT * FROM cursos";
$consulta_cursos = mysqli_query($conexao, $query);

// Carregando lop
$query = "SELECT * FROM lop";
$consulta_lop = mysqli_query($conexao, $query);


// Carregando hoc ky
$query = "SELECT * FROM hocky";
$consulta_hocky = mysqli_query($conexao, $query);

// Carregando user
$query = "SELECT * FROM users";
$consulta_users = mysqli_query($conexao, $query);

$query = "SELECT * FROM diemrenluyen";
$consulta_alldiem = mysqli_query($conexao, $query);

// Carregando diemrenluyen
if (isset( $_SESSION['username'])) {
	$username =  $_SESSION['username'];
	$query = "SELECT * FROM diemrenluyen WHERE username = '$username'";
	$consulta_diemrenluyen = mysqli_query($conexao, $query);

	$query = "SELECT malop FROM users WHERE username = '$username'";
	$dbuser = mysqli_query($conexao, $query);

	$data = mysqli_fetch_row($dbuser);
	$malop = $data[0];
	$query = "SELECT username,hoten FROM users WHERE malop = '$malop' and quyen = 0";
	echo $query;
	$consulta_userofclass = mysqli_query($conexao, $query);

	//}
	//consulta_diemrenluyen_review 
}


// Carregando alunos
$query = "SELECT * FROM ALUNOS" ;
$consulta_alunos = mysqli_query($conexao, $query);

// Carregando matrículas
$query = "SELECT alunos_cursos.id_aluno_curso, alunos.nome_aluno, cursos.nome_curso
			FROM alunos, cursos, alunos_cursos
			WHERE alunos_cursos.id_aluno = alunos.id_aluno
			AND alunos_cursos.id_curso = cursos.id_curso";
$consulta_matriculas = mysqli_query($conexao, $query);


