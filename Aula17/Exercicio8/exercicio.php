<?php

function exercicio1($nota1, $nota2, $nota3) {
//================CALCULA A MÉDIA DO ALUNO E RETORNA SE APROVADO OU NÃO
$mediaNotas = ($nota1 + $nota2 + $nota3) / 3; //Variavel com a média das tres notas
    if ($mediaNotas) { // se o primeiro número for o menor
      return "$numero1 menor que $numero2";

    } else if ($numero1 > $numero2) { // se o segundo número for o menor
       return "$numero1 maior que $numero2";

    } else { // se os dois números forem iguais
        return "Os número são iguais";
    }

    return " $resultado";
    }
?>