
<?php 


session_start(); //Inicializa a sessao

//criando uma nova sessao com o nome "nome" e de valor "Maria"
$_SESSION['nome'] = "Maria";

echo "<a href='sessao01.php'> Teste Sessão </a>";


?>