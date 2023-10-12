<?php

function exercicio1($numero1, $numero2) {
//================imprimir em ordem crescente onde o primeiro número é numero1 e o ultimo número é numero2

    if ($numero1 < $numero2) { // se o primeiro número for o menor
      return "$numero1 menor que $numero2";

    } else if ($numero1 > $numero2) { // se o segundo número for o menor
       return "$numero1 maior que $numero2";

    } else { // se os dois números forem iguais
        return "Os número são iguais";
    }

    return " $resultado";
    }
?>