<?php
require 'conn.php';
require 'header.php';
require 'functions/lista_respostas.php';
?>

<body>
	<main class="container cont-respostas">
		<h1 class="titulo"><?php echo $titulo; ?></h1>
		<p class="desc-pergunta"><?php echo $descricao; ?></p>
		<hr>

		<?php
		$i=0;
		while ($rs = mysqli_fetch_object($result)) {
			?>
			<div class="card">
				<div class="card-body">
					<p>
						<?php echo $rs->corpo; ?>
					</p>
					<p class="data-resposta">
						<?php echo $rs->creatAt; ?>
					</p>
				</div>
			</div>
			<?php
			$i++;
		}
		if($i==0){
			?>
			<p>
				Esta pergunta ainda não foi respondida. Seja o primeiro!
			</p>
			<?php
		}
		?>

		<hr>
		<h2>Sua resposta</h2>
		<form method="post" action="functions/cad_resposta.php">
			<input type="hidden" name="id" value="<?php echo $id ?>">
			<div class="form-group">
				<textarea name="resposta" rows="6" class="form-control" placeholder="Escreva sua resposta aqui" required></textarea>
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-success">Responder</button>
				<button type="reset" class="btn btn-secondary">Limpar</button>
			</div>
		</form>
	</main>
</body>
</html>