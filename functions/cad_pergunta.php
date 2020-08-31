<?php
require '../conn.php';

date_default_timezone_set('America/Manaus');

$titulo = $_POST['titulo'];
$desc = $_POST['pergunta'];
$query = "INSERT INTO pergunta(titulo,descricao,creatAt) VALUES('".$titulo."', '".$desc."',now())";
$result = mysqli_query($conn,$query);
header('Location: ../index.php');
?>