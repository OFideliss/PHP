<?php
 // variavel super global GET
// $nome = $_GET['nome'];
// $email = $_GET['email'];
// $senha = $_GET['senha'];
// $rua = $_GET['rua'];
// $casa = $_GET['casa'];
// $cidade = $_GET['cidade'];
// $telefone = $_GET['telefone'];

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$rua = $_POST['rua'];
$casa = $_POST['casa'];
$cidade = $_POST['cidade'];
$telefone = $_POST['telefone'];


echo "Olá $nome, Seja bem vindo";
echo '<br>';
echo "Você mora na rua $rua, número: $casa, $cidade";
echo '<br>';
echo "Seu telefone é: $telefone";
echo '<br>';
echo "Seu email é: $email";
?>
