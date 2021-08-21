<?php if(!isset($_GET['editar'])){ ?>
<table style="border-collapse:collapse;border:none;">
    <tbody>
	<tr>
            <td style="width: 467.5pt;border-right: 1pt solid windowtext;border-bottom: 1pt solid windowtext;border-left: 1pt solid windowtext;border-image: initial;border-top: none;padding: 0cm 5.4pt;vertical-align: top;">
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><strong><span style='font-size:17px;font-family:"Times New Roman",serif;'>Add users from file</span></strong></p>
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><strong><span style='font-size:17px;font-family:"Times New Roman",serif;'>
				<div id="wrapper">
				<form method="post" action="import_file.php" enctype="multipart/form-data">
				<input type="file" name="file"/>
				<input type="submit" class="btn btn-dark" name="submit_file" value="Submit"/>
				</form>
				</div> </span></strong></p>
            </td>
        </tr>
        <tr>
            <td style="width: 467.5pt;border: 1pt solid windowtext;padding: 0cm 5.4pt;vertical-align: top;">
                
                <p style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;line-height:normal;font-size:15px;font-family:"Calibri",sans-serif;'><strong><span style='font-size:17px;font-family:"Times New Roman",serif;'>
				<h1>Adding User</h1>
				<form method="post" action="processa_user.php" id="formValidator">
					<br>
					<label class="badge badge-secondary">UserName</label><br>
					<input class="form-control" type="text" name="username" placeholder="UserName" >
					<br>
					<label class="badge badge-secondary">Password</label><br>
					<input class="form-control"  type="password" name="password" placeholder="Password" >
					<br>
					<label class="badge badge-secondary">Permission</label><br>
					<input class="form-control"  type="text" name="quyen" placeholder="Quyen" >
					<br>
					<label class="badge badge-secondary">Full Name</label><br>
					<input class="form-control"  type="text" name="hoten" placeholder="Ho va ten" >
					<br>
					<label class="badge badge-secondary">Date of Birth</label><br>
					<input class="form-control"  type="text" name="ngaysinh" placeholder="Ngay sinh" >
					<br>
					<p class="badge badge-secondary">Class UserName</p>
					<select class="form-control" name="malop">
						<option value="">Class Name</option>
						<?php 
							while($linha = mysqli_fetch_array($consulta_lop)){
							echo '<option value="'.$linha['malop'].'">'.$linha['tenlop'].'</option>';
						}
						?>
					</select>
					<br>
					<input type="submit" class="btn btn-dark" value="Add Class">
				</form>
				</span></strong></p>
            </td>
        </tr>

    </tbody>
</table>


<?php } else { ?>
	<?php while($linha = mysqli_fetch_array($consulta_users)){ ?>
		<?php if($linha['username'] == $_GET['editar']){ ?>

			<h1>Editing Class</h1>
			<form method="post" action="edita_user.php">
				<input type="hidden" name="username" value="<?php echo $linha['username']; ?>">
				<br>
				<label class="badge badge-secondary">Username</label><br>
				<input class="form-control" type="text" name="username"  value="<?php echo $linha['username']; ?>">
				<br><br>
				<label class="badge badge-secondary">Password</label><br>
				<input class="form-control" type="password" name="password"   value="<?php echo $linha['password']; ?>">
				<br><br>
				<label class="badge badge-secondary">Permission</label><br>
				<input class="form-control" type="text" name="quyen"   value="<?php echo $linha['quyen']; ?>">
				<br><br>
				<label class="badge badge-secondary">Full Name</label><br>
				<input class="form-control" type="text" name="hoten"   value="<?php echo $linha['hoten']; ?>">
				<br><br>
				<label class="badge badge-secondary">Date of Birth</label><br>
				<input class="form-control" type="text" name="ngaysinh"   value="<?php echo $linha['ngaysinh']; ?>">
				<br><br>
				<p class="badge badge-secondary">ClassName</p>
				<select class="form-control" name="malop">
					<option value="">ClassName</option>
					<?php 
						while($data = mysqli_fetch_array($consulta_lop)){
							if ($data['malop'] == $linha['malop']) {
								echo '<option selected value="'.$data['malop'].'">'.$data['tenlop'].'</option>';
							}else {echo '<option value="'.$data['malop'].'">'.$data['tenlop'].'</option>';}
					}
					?>
				</select>
				<br><br>
				<input class="btn btn-success" type="submit" value="Update Class">
			</form>
		<?php } ?>
	<?php } ?>
<?php } ?>