<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "BancoImagens";

$conexao = mysqli_connect($host,$username,$password) or die("Impossível conectar ao banco.");

@mysqli_select_db($conexao, $db) or die("Impossível conectar ao banco");

$result=mysqli_query($conexao, "SELECT * FROM imagens") or die("Impossível executar a query");

while($row=mysqli_fetch_object($result)) {
	echo "<img src='getImagem.php?PicNum=$row->id' \">";
}

?>