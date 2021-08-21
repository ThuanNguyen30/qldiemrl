
<div class="jumbotron animated bounceInLeft">
	<a class="btn btn-dark" href="?pagina=inserir_diemrenluyen&idp=<?php echo $_SESSION['username']; ?>">
		Thêm Đánh Giá
	</a>
	<table class="table-bordered table-striped table-hover" id="cursos">

		<thead>
			<tr class="table-secondary">
				<th>Năm học</th>
				<th>Học Kỳ</th>
				<th>Tháng</th>
				<th>Tổng điểm</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</thead>

		<!-- Varrendo e exibindo resultados -->
		<tbody>
			<?php
				while ($data = mysqli_fetch_array($consulta_diemrenluyen)) {
					echo '<tr><td>'.$data['namhoc'].'</td>';
					echo '<td>'.$data['hocky'].'</td>';
					echo '<td>'.$data['thang'].'</td>';
					echo '<td>'.$data['tongdiem'].'</td>';
			?>	
				<td><a href="?pagina=inserir_diemrenluyen&editar=<?php echo $data['username']; ?>">
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
