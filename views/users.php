<div class="jumbotron animated bounceInLeft">
	<a class="btn btn-dark" href="?pagina=inserir_user">
		Add User
	</a>
	<table class="table-bordered table-striped table-hover" id="cursos">

		<thead>
			<tr class="table-secondary">
				<th>UserName</th>
				<th>Password</th>
				<th>Permission</th>
				<th>Full Name</th>
				<th>Date of Birth</th>
				<th>Class ID</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>

		<!-- Varrendo e exibindo resultados -->
		<tbody>
			<?php
				while ($data = mysqli_fetch_array($consulta_users)) {
					echo '<tr><td>'.$data['username'].'</td>';
					echo '<td>'.$data['password'].'</td>';
					echo '<td>'.$data['quyen'].'</td>';
					echo '<td>'.$data['hoten'].'</td>';
					echo '<td>'.$data['ngaysinh'].'</td>';
					echo '<td  >'.$data['malop'].'</td>';
			?>	
				<td><a href="?pagina=inserir_user&editar=<?php echo $data['username']; ?>">
					<i class="fas fa-edit"></i>
				</a></td>
				<td><a href="deleta_user.php?username=<?php echo $data['username']; ?>">
					<i class="fas fa-trash-alt" id="cursos-delete"></i>
				</a></td></tr>
			<?php
				}
			?>
		</tbody>
	</table>
</div>