<?php
$id = $_GET['id'];
$query = "SELECT * FROM resposta WHERE id_pergunta=$id ORDER BY id DESC";
$result = mysqli_query($conn,$query);

$query = "SELECT * FROM pergunta WHERE id=$id";
$return = mysqli_query($conn,$query);
$rs = mysqli_fetch_object($return);
$titulo = $rs->titulo;
$descricao = $rs->descricao;
?>