<?php

function exercicio1($numero1, $numero2) {
//================imprimir em ordem crescente onde o primeiro número é numero1 e o ultimo número é numero2
//
// Variavel para exibir numeros
$resultado;
    if ($numero1 < $numero2) { // se o primeiro número for o menor
      $resultado = "";
        for ($i=$numero1; $i <= $numero2; $i++) { 
        $resultado.= "$i ";
        }
    } else if ($numero1 > $numero2) { // se o segundo número for o menor
        $resultado = "";
        for ($i=$numero2; $i <= $numero1; $i++) { 
        $resultado.= "$i ";
        }
    } else { // se os dois números forem iguais
        return "Os número são iguais";
    }

    return " $resultado";
    }
?>