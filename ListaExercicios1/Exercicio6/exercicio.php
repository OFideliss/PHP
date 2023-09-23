<?php

function exercicio($lado1,$lado2,$lado3) {

//Descobrir se as medidas são de um triangulo verdadeiro

//Descobrir o qual o maior lado
$maiorLado = max($lado1, $lado2, $lado3);
//variavel para a soma dos dois menores lados;
$somaMenoresLados;

if ($maiorLado == $lado1) { //Caso o maior lado for o lado1
    $somaMenoresLados = $lado2 + $lado3;
    if ($maiorLado < $somaMenoresLados) {
        return "De acordo com os valores de entrada eles representam os lados de um triangulo.";
    } else {
        return "De acordo com os valores de entrada eles NÃO representam os lados de um triangulo.";
    }
} elseif ($maiorLado ==$lado2) {//Caso o maior lado for o lado2
    $somaMenoresLados = $lado1 + $lado3;
    if ($maiorLado < $somaMenoresLados) {
        return "De acordo com os valores de entrada eles representam os lados de um triangulo.";
    } else {
        return "De acordo com os valores de entrada eles NÃO representam os lados de um triangulo.";
    }
} else { //Caso o maior lado for o lado3
    $somaMenoresLados = $lado1 + $lado2;
    if ($maiorLado < $somaMenoresLados) {
        return "De acordo com os valores de entrada eles representam os lados de um triangulo.";
    } else {
        return "De acordo com os valores de entrada eles NÃO representam os lados de um triangulo.";
    }
}
}


?>