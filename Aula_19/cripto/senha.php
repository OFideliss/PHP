<?php
$senha = 1234567;
$senhaDb = '$2y$10$xJ.johBcOryL6WLVGHTb5eO/PvvWyP047vnXIC1QGmdGoHcC6kRTm';
// $opcao = ['cost'=>10] ;

// $senhaSegura = password_hash($senha, PASSWORD_DEFAULT,$opcao);
if (password_verify($senha, $senhaDb)) {
	echo "senha valida";
}else{
	echo "senha invalida";
}

// echo "senha" . $senha . "<br>";
// echo "senha Segura:  " . $senhaSegura . "<br>";

?>