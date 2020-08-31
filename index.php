<?php
require 'conn.php';
require 'header.php';
require 'functions/lista_perguntas.php';
?>

<body>
<main class="container cont-perguntas">
	<h1 class="titulo">Fórum</h1>
	<hr>
	<a href="pergunta.php" class="btn btn-primary">Faça sua pergunta</a>
	<hr>
	<?php
	while ($rs = mysqli_fetch_object($result)) {
		?>
		<div class="card">
			<div class="card-body">
				<span class="titulo-pergunta"><?php echo $rs->titulo; ?></span>
			</div>
			<div class="card-footer">
				<a href="respostas.php?id=<?php echo $rs->id ?>" class="btn btn-success btn-responder">Responder</a>
			</div>
		</div>
		<?php
	}
	?>
</main>
</body>
</html>