<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "BancoImagens";
	$PicNum = $_GET["PicNum"];

     //Variavel para conexao
	$conexao = mysqli_connect($host,$username,$password) or die("Impossível conectar ao banco.");
	//Estabelece conexao com o banco de dados
	@mysqli_select_db($conexao, $db) or die("Impossível conectar ao banco.");
	$result=mysqli_query($conexao, "SELECT * FROM imagens WHERE id=$PicNum") or die("Impossível executar a query ");
	$row=mysqli_fetch_object($result);
	Header( "Content-type: image/gif");
	echo $row->imagem;
?>