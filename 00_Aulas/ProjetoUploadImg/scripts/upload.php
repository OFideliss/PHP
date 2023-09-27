<?php

// armazena a variavel "imagem" do index.html a variavel $imagem do uplaod.php
$imagem = $_FILES["imagem"];
//identifica o nome do host
$host = "localhost";
//identifica o nome do user
$username = "root";
//a senha do user
$password = "";
//o nome do banco de dados
$db = "BancoImagens";

if($imagem != NULL) {
	$nomeFinal = time().'.jpg';
	if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
		$tamanhoImg = filesize($nomeFinal);

		$mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg));

		mysqli_connect($host,$username,$password) or die("Impossível Conectar");

		@mysql_select_db($db) or die("Impossível Conectar");

		mysql_query("INSERT INTO imagens (imagem) VALUES ('$mysqlImg')") or
		die("O sistema não foi capaz de executar a query");

		unlink($nomeFinal);

		header("location:exibir.php");
	}
}
else {
	echo"Você não realizou o upload de forma satisfatória.";
}

?>