<?php

//Dados de conexão com base de dados
$servename = "localhost";
$username = "root";
$password = "";
$dbname = "aluno";

// Criar conexão com DB
$conn = mysqli_connect($servename, $username, $password, $dbname);

//Verificando a conexão
if (!$conn){
	die("Falha na conexão!.". mysqli_connect_error());
}

echo "Conectado com sucesso!";

mysqli_close($conn);
?>