<div class="jumbotron animated bounceInLeft">
	<a class="btn btn-dark" href="?pagina=inserir_hocky">
		Adding Semester
	</a>
	<table class="table-bordered table-striped table-hover" id="alunos">

		<thead>
			<tr class="table-secondary">
				<th>Semester ID</th>
				<th>Semester Name</th>
				<th>School Year</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>

		<!-- Varrendo e exibindo resultados -->
		<tbody>
			<?php
				while ($data = mysqli_fetch_array($consulta_hocky)) {
					echo '<tr><td>'.$data['mahk'].'</td>';
					echo '<td>'.$data['tenhk'].'</td>';
					echo '<td>'.$data['namhoc'].'</td>';
			?>	
				<td><a href="?pagina=inserir_hocky&editar=<?php echo $data['mahk']; ?>">
					<i class="fas fa-edit"></i>
				</a></td>
				<td><a href="deleta_hocky.php?mahk=<?php echo $data['mahk']; ?>">
					<i class="fas fa-trash-alt" id="cursos-delete"></i>
				</a></td></tr>
			<?php
				}
			?>
		</tbody>
	</table>
</div>