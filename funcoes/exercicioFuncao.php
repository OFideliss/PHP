<?php
//Criar uma function 

function mediaAritmetica($nota1,$nota2,$nota3,$nota4) {
	$notaFinal = ($nota1 + $nota2 + $nota3 + $nota4)/4;

	if ($notaFinal>=7) {
		echo "Aluno aprovado";
	} elseif ($notaFinal>=5) {
		echo "Exame";
	} elseif ($notaFinal<5) {
		echo "Reprovado";
	}
	echo "<br>";
	return "Média final: $notaFinal";
	
}

echo mediaAritmetica(8,5,7,4);

?>