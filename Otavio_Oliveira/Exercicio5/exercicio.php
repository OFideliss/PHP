<?php

function exercicio($KmPerorrido,$ConsumoLitros,$PrecoCombustivel) {

//Calculo consumo médio em Km/l
$ConsumoMedio = $KmPerorrido / $ConsumoLitros;   

//Calculo do custo de cada Km percorrido
$CustoKm = $ConsumoLitros * $PrecoCombustivel / $KmPerorrido;
    return "Média de consumo da gasolina: $ConsumoMedio"."Km/litro<br>
    Média de custo de cada Km percorrido: R$$CustoKm";
}


?>