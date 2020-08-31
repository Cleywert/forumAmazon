<?php
require '../conn.php';

$id = $_POST['id'];
$resp = $_POST['resposta'];
$query = "INSERT INTO resposta(corpo,id_pergunta,creatAt) VALUES ('$resp',$id,now())";
// echo $query;
mysqli_query($conn,$query);
header('Location: ../respostas.php?id='.$id);
?>