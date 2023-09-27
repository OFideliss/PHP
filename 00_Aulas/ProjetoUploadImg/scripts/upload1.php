<?php

//======Dados de conexão com base de dados=====
// armazena a variavel "imagem" do index.html a variavel $imagem do uplaod.php
$imagem = $_FILES["imagem"];
//identifica o nome do host
$servename = "localhost";
//identifica o nome do user
$username = "root";
//a senha do user
$password = "";
//o nome do banco de dados
$dbname = "UploadImagens";

// Criar conexão com DB
$conexao = mysqli_connect($servename, $username, $password, $dbname);

//Verificando a conexão
if (!$conexao){
	die("Falha na conexão!.". mysqli_connect_error());
}

echo "Conectado com sucesso!";
//=============================Formulario de Upload de imagem=================

//Verifica se a conexão foi bem sucedida
if ($conexao) {
	// Recupera os dados do formulário
	$nome =$_POST['nome'];

    // Insere o dados na tabela imagens
    $sql = "INSERT INTO imagens(nome, email, dataNasc, endereco) VALUES ('$nome', '$email','$data', '$endereco')";
    mysqli_query($conexao,$sql);

    // Verifica se a inserção foi bem-sucedida
    if(mysqli_affected_rows($conexao) > 0 ){

    	//Redireciona para uma página de sucesso
    	header('Location: sucesso.php');
    } else {
    	//Redireciona para uma página de erro
    	header('Location: erro.php');
    }  
}
mysqli_close($conexao);
?>