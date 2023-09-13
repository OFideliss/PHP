<?php

//Dados de conexão com base de dados
$servename = "localhost";
$username = "root";
$password = "";
$dbname = "clientes";

// Criar conexão com DB
$conexao = mysqli_connect($servename, $username, $password, $dbname);

//Verificando a conexão
if (!$conexao){
	die("Falha na conexão!.". mysqli_connect_error());
}

echo "Conectado com sucesso!";
//=============================Formulario de Cadastro=================

//Verifica se a conexão foi bem sucedida
if ($conexao) {
	// Recupera os dados do formulário
	$nome =$_POST['nome'];
	$email =$_POST['email'];
	$data_nascimento=$_POST['data_nascimento'];
    $endereco=$_POST['endereco'];

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
}
mysqli_close($conexao);
?>