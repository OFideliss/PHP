<?php

function exercicio18L($areaMetros) {
    $QtdLitrosTotal = ceil(($areaMetros/3)*1.1);
    $QtdLatas18L = ceil($QtdLitrosTotal/18);
    $ValorTotalLatas18L = $QtdLatas18L*80;

//================Primeira Situação: Apenas lata de 18 litros
    return " Comprar apenas latas de 18 litros:
    <br>
    Quantidade de litros necessários para a pintura: $QtdLitrosTotal litros.<br>
            Quantidade de latas de 18 litros: $QtdLatas18L<br>
            Preço das latas de 18 litros: R$$ValorTotalLatas18L<br><br>";
}
function exercicio36L($areaMetros) {
//================Segunda Situação: Apenas galoes de 3,6 anos
	  $QtdLitrosTotal = ceil(($areaMetros/3)*1.1);
      $QtdGaloes  = ceil($QtdLitrosTotal/3.6); 
      $ValorGaloes = $QtdGaloes*25;
      return " Comprar apenas galões de 3,6 litros:
    <br>
    Quantidade de litros necessários para a pintura: $QtdLitrosTotal litros.<br>
            Quantidade de galões de 3,6 litros: $QtdGaloes<br>
            Preço das galões de 3,6 litros: R$$ValorGaloes<br><br>";
}

function exercicioMelhor($areaMetros) {
//================Terceira Situação: Melhor preço
	  $QtdLitrosTotal = ceil(($areaMetros/3)*1.1);

	  //=============18L=============
      $QtdLatas18L = (int) ($QtdLitrosTotal/18);
      $ValorTotalLatas18L = (int) ($QtdLatas18L*80);

     //=============3,6L=============
     //calcula quantos litros sobram menor as latas de 18l
      $QtdLitrosRestante  = ($QtdLitrosTotal-($QtdLatas18L*18)); 

      $QtdGaloes  = ceil($QtdLitrosRestante/3.6); 
      $ValorGaloes = (int) ($QtdGaloes*25);

//Calculo de melhor preço

$MelhorPreco = (int)($ValorGaloes + $ValorTotalLatas18L);
return " Combinação de galões e latas :
    <br>
    Quantidade de litros necessários para a pintura: $QtdLitrosTotal litros.<br>
            Quantidade de latas de 18 litros: $QtdLatas18L<br>
            Quantidade de galões de 3,6 litros: $QtdGaloes<br>
            Preço Total: R$$MelhorPreco";
      //return printf("R$%.2f",$MelhorPreco);
}
?>