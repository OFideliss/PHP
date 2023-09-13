<?php

//Dados de conexão com base de dados
$servename = "localhost";
$username = "root";
$password = "";
$dbname = "clientes";

// Criar conexão com DB
$conexao = mysqli_connect($servename, $username, $password, $dbname);

//=============================Formulario de Cadastro=================

//Verifica se a conexão foi bem sucedida
if ($conexao->connect_error) {
    header("Location: erro.html")
    exit();
} else {
	// Recupera os dados do formulário
	$nome =$_POST['nome'];
    $endereco=$_POST['endereco'];
	$email =$_POST['email'];
    $sexo = $_POST['´sexo']
	$data_nascimento=$_POST['data_nascimento'];
    //data em formato brasileiro para inserir no mysql use:
	$data = implode("-", array_reverse(explode("/", $data_nascimento)));
    // Insere o dados na tabela do banco
    $sql = "INSERT INTO usuario(nome, email, dataNasc, endereco) VALUES ('$nome', '$email','$data', '$endereco')";
    mysqli_query($conexao,$sql);

    // Verifica se a inserção foi bem-sucedida
    if(mysqli_affected_rows($conexao) > 0 ){

    	//Redireciona para uma página de sucesso
    	header('Location: sucesso.php');
    } else {
    	//Redireciona para uma página de erro
    	header('Location: erro.php');
    }  
} else {
    	//Redireciona para uma página de erro
    	header('Location: erro.php');
    } 
mysqli_close($conexao);
?>