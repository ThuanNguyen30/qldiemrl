<?php if(!isset($_GET['editar'])){ ?>

<h1>Adding Semester</h1>
<form method="post" action="processa_hocky.php" id="formValidator">
	<br>
	<label class="badge badge-secondary">Semester ID</label><br>
	<input class="form-control" type="text" name="mahk" id="mahk" >
	<br><br>
	<label class="badge badge-secondary">Semester Name</label><br>
	<input class="form-control" type="text" name="tenhk" id="tenhk">
	<br><br>
	<label class="badge badge-secondary">School Year</label><br>
	<input class="form-control" type="text" name="namhoc" id="namhoc">
	<br><br>
	<input type="submit" class="btn btn-dark" value="Add Semester">
</form>

<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_hocky)){ ?>
		<?php if($linha['mahk'] == $_GET['editar']){ ?>
			<h1>Editing Semester</h1>
				<form method="post" action="edita_hocky.php">
					<input type="hidden" name="mahk" value="<?php echo $linha['mahk']; ?>">
					<br>
					<label class="badge badge-secondary">Semester Name</label><br>
					<input class="form-control" type="text" name="tenhk" placeholder="Insira o nome do aluno" value="<?php echo $linha['tenhk']; ?>">
					<br><br>
					<label class="badge badge-secondary">School Year</label><br>
					<input class="form-control"  type="text" name="namhoc" placeholder="Insira a data de nascimento" value="<?php echo $linha['namhoc']; ?>"><br><br>
					<input class="btn btn-success" type="submit" value="Chỉnh sửa học kỳ">
				</form>
			<?php } ?>
	<?php } ?>
<?php } ?>