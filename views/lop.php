<div class="jumbotron animated bounceInLeft">
	<a class="btn btn-dark" href="?pagina=inserir_lop">
		Add Class
	</a>
	<table class="table-bordered table-striped table-hover" id="cursos">

		<thead>
			<tr class="table-secondary">
				<th>Class ID</th>
				<th>Class Name</th>
				<th>Academic Year</th>
				<th>Homeroom teacher</th>
				<th>Subject</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>

		<!-- Varrendo e exibindo resultados -->
		<tbody>
			<?php
				while ($abc = mysqli_fetch_array($consulta_lop)) {
					echo '<tr><td>'.$abc['malop'].'</td>';
					echo '<td>'.$abc['tenlop'].'</td>';
					echo '<td>'.$abc['nienkhoa'].'</td>';
					echo '<td>'.$abc['gvcn'].'</td>';
					echo '<td>'.$abc['monday'].'</td>';
			?>	
				<td><a href="?pagina=inserir_lop&editar=<?php echo $abc['malop']; ?>">
					<i class="fas fa-edit"></i>
				</a></td>
				<td><a href="deleta_lop.php?malop=<?php echo $abc['malop']; ?>">
					<i class="fas fa-trash-alt" id="cursos-delete"></i>
				</a></td></tr>
			<?php
				}
			?>
		</tbody>
	</table>
</div>