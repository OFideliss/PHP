<?php
//declarar variaveis
$nota1 = 5;
$nota2 = 5;
$nota3 = 5;
$nota4 = 5;
$mediaFinal = ($nota1+$nota2+$nota3+$nota4)/4;
//
echo "A média do aluno é $mediaFinal <br>";
//logica de if
if ($mediaFinal>=7) {
	echo("Aluno aprovado");
} elseif ($mediaFinal>=5) {
	echo("Exame");
} elseif ($mediaFinal<5) {
	echo("Aluno reprovado");
}




?>