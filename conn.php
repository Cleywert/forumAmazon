<?php
$conn = mysqli_connect('localhost','root','','forum');
mysqli_set_charset($conn, "utf8");
if ($conn) {
	// echo "Connected";
}else{
	echo "Error of connection";
}
?>