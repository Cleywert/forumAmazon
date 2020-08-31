<?php
require 'conn.php';
require 'header.php';
?>

<body>
	<main class="container cont-pergunta">
		
		<div class="card">
			<div class="card-header">
				<h1>Faça sua pergunta</h1>
			</div>

			<div class="card-body">
				<form id="form-pergunta" method="post" action="functions/cad_pergunta.php">
					<div class="form-group">
						<label>Titulo da Pergunta</label>
						<input type="text" name="titulo" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Descreva sua Pergunta</label>
						<textarea class="form-control" rows="8" name="pergunta" required></textarea>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-success">Enviar</button>
						<button type="reset" class="btn btn-secondary">Limpar</button>
					</div>
				</form>
			</div>
		</div>

	</main>
</body>
</html>