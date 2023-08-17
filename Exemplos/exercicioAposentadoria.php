<?php
//declarar variaveis 
$sexo = "f";
$tempo_de_servico = 30;
$sexo = strtoupper($sexo); // Deixar todas as letrar em masiculo
//
//========================================
//criar o script de sexo e tempo de serviço
if ($sexo=="M" && $tempo_de_servico>=35) {
	echo "Você pode se aposentar (Homem)";
} elseif ($sexo=="M" && $tempo_de_servico<35){
	echo "Bora trabalhar mais ai (Homem)";
}elseif ($sexo=="F" && $tempo_de_servico>=30) {
	echo "Você pode se aposentar (Mulher)";
} elseif ($sexo=="F" && $tempo_de_servico<30) {
	echo "Bora trabalhar mais ai (Mulher)";
}

?>