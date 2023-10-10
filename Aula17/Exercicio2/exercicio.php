<?php

function exercicio1($numero) {
//================Realizar o calculo da tabuada do numero digitado
//variavel para calcular o valor
$calculo = 0;
//varaivel para concatenar os resultados de cada operação
$resultado = "Tabuada do número: $numero";

//laço for para realizar todas as multiplicações até 10
for ($i=0; $i <= 10; $i++) {
    //calculo do valor
        $calculo = $numero*$i;
    //concatena os resultados 
        $resultado.= " <br> $numero x $i = $calculo";
    }

//retorna o $resultado concatenado com todas as multiplicações
    return " $resultado";
    }
?>