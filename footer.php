</div>
	<div class="custom-div">
		<blockquote class="blockquote text-center ml-4">
		  <p class="mb-0">A psicologia nunca poderá dizer a verdade sobre a loucura, pois é a loucura que detém a verdade da psicologia.</p>
		  <div class="blockquote-footer">Michel Foucault <cite title="Título da fonte">Filósofo, historiador</cite></div>
		</blockquote>
		<hr>
	</div>
	<footer class="footer-distributed">

	<div class="logo-rodape">
		<a href="logout.php"><img src="img/dogcursos2.png" title="Logo" alt="Logo" width="130px"></a>
	</div>
			<div class="footer-right">
				
				<a href="https://api.whatsapp.com/send?phone=5519989109520" target="_blank"><i class="fab fa-whatsapp"></i></a>
				<a href="#"><i class="fab fa-facebook"></i></a>
				<a href="#"><i class="fab fa-twitter"></i></a>
				<a href="#"><i class="fab fa-linkedin"></i></a>
				<a href="https://github.com/SilasRodrigues19" target="_blank"><i class="fab fa-github"></i></a>
				<a href="#"><i class="fab fa-youtube"></i></a>

			</div>

			<div class="footer-left">
				<p><b>&#169 2019 Dog Cursos. Todos os direitos reservados.</b></p>
			</div>


	<script src="js/jquery.js"></script>
	<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/jquery-mask.js"></script>
	<script src="js/validation.js"></script>
	<script src="js/localization/messages_pt_BR.js"></script>

	<script>
		$(document).ready(function() {
	    $('#cursos, #alunos, #matriculas').DataTable( {
	        "language": {
	            emptyTable: "<li class='text-danger' align='center'>Data not found</li>"
	        			}
	   			 } ); /* Traduzindo DataTable para Português*/
			} );
	</script>

	<script>
		$(document).ready(function() {
			$("#formValidator").validate({
				rules: {
					nome_curso: {
						required: true
					},
					carga_horaria: {
						required: true,
					},
					nome_aluno: {
						required: true,
						minlength: 3,
						maxlength: 45						
					},
					data_nascimento: {
						required: true,
						date: true,
						maxlength: 10,
						minlength: 10
					},
					escolha_aluno: {
						required: true
					},
					escolha_curso: {
						required: true
					}
				}
			})
		});
	</script>
	<script>
		$(document).ready(function() {
			$('#cursos').DataTable();
			$('#alunos').DataTable();
			$('#matriculas').DataTable();
		});
	</script>
	
</footer>
</body>
</html>