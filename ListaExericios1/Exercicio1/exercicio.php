<?php

function exercicio ($areaMetros) {

// Primeira Situação: Comprar apenas latas de 18 anos
$QtdLitrosTotal;
$QtdGaloes18L;
$ValorTotalGaloes18L = 80;
$QtdLitrosTotal = (int) $areaMetros/6;
$QtdLitrosTotal = ceil($QtdLitrosTotal * 1.1); // Arredonda para cima

if ($QtdLitrosTotal<=18) {
	//Exibe o valor para apenas um galão
	return "Apenas galões de 18L:..............R$$ValorTotalGaloes18L $QtdLitrosTotal";
} else {

	
	if ($QtdLitrosTotal%18==0) {
		$QtdGaloes18L = $QtdLitrosTotal/18;
		$ValorTotalGaloes18L = $QtdGaloes18L*80;
return "AApenas galões de 18L:..............R$$ValorTotalGaloes18L";

	}
}
}

?>