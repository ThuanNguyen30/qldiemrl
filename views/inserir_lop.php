<?php if(!isset($_GET['editar'])){ ?>


<h1>Adding Class</h1>
<form method="post" action="processa_lop.php" id="formValidator">
	<br>
	<label class="badge badge-secondary">Class ID</label><br>
	<input class="form-control" type="text" name="malop" placeholder="Ma lop" >
	<br><br>
	<label class="badge badge-secondary">Class Name</label><br>
	<input class="form-control"  type="text" name="tenlop" placeholder="Class Name" >
	<br><br>
	<label class="badge badge-secondary">Academic Year</label><br>
	<input class="form-control"  type="text" name="nienkhoa" placeholder="Nien Khoa" >
	<br><br>
	<label class="badge badge-secondary">Homeroom Teacher</label><br>
	<input class="form-control"  type="text" name="gvcn" placeholder="Them GVCN" >
	<br><br>
	<label class="badge badge-secondary">Subject</label><br>
	<input class="form-control"  type="text" name="monday" placeholder="Mon day" >
	<br><br>
	<input type="submit" class="btn btn-dark" value="Add Class">
</form>


<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_lop)){ ?>
		<?php if($linha['malop'] == $_GET['editar']){ ?>

			<h1>Editing Class</h1>
			<form method="post" action="edita_lop.php">
				<input type="hidden" name="malop" value="<?php echo $linha['malop']; ?>">
				<br>
				<label class="badge badge-secondary">Class ID</label><br>
				<input class="form-control" type="text" name="malop"  value="<?php echo $linha['malop']; ?>">
				<br><br>
				<label class="badge badge-secondary">Class Name</label><br>
				<input class="form-control" type="text" name="tenlop"   value="<?php echo $linha['tenlop']; ?>">
				<br><br>
				<label class="badge badge-secondary">Academic Year</label><br>
				<input class="form-control" type="text" name="nienkhoa"   value="<?php echo $linha['nienkhoa']; ?>">
				<br><br>
				<label class="badge badge-secondary">Homeroom Teacher</label><br>
				<input class="form-control" type="text" name="gvcn"   value="<?php echo $linha['gvcn']; ?>">
				<br><br>
				<label class="badge badge-secondary">Subject</label><br>
				<input class="form-control" type="text" name="monday"   value="<?php echo $linha['monday']; ?>">
				<br><br>
	
				<br><br>
				<input class="btn btn-success" type="submit" value="Update Class">
			</form>
		<?php } ?>
	<?php } ?>
<?php } ?>
