<div class="jumbotron animated bounceInLeft">
	<a class="btn btn-dark" href="?pagina=inserir_matricula">
		Inserir nova matricula
	</a>
	<table class="table-bordered table-striped table-hover" id="matriculas">
		
		<thead>
			<tr class="table-secondary">
				<th>Nome do Aluno:</th>
				<th>Nome do Curso:</th>
				<th>Deletar</th>
			</tr>
		</thead>

		<!-- Varrendo e exibindo resultados -->
		<tbody>
			<?php
				while ($linha = mysqli_fetch_array($consulta_matriculas)) {
					echo '<tr><td>'.$linha['nome_aluno'].'</td>';
					echo '<td>'.$linha['nome_curso'].'</td>';
			?>
				<td><a href="deleta_matricula.php?id_aluno_curso=<?php echo $linha['id_aluno_curso']; ?>">
					<i class="fas fa-user-times"  id="matriculas-delete"></i>
				</a></td></tr>
			<?php
				}
			?>
		</tbody>
	</table>
</div>