<?php



function exercicio($numero1, $numero2) {
    // Descobrir qual é o menor número
    $menorNumero = min($numero1, $numero2);    //função min() descobre o menor numero entre as variaveis 
    // Descobrir qual é o maior número         
    $maiorNumero = max($numero1, $numero2);    //função man() descobre o menor numero entre as variaveis 
    // Variavel com o resultado
    $resultado = 0;

    // Caso o menor numero for igual a 0
    if ($menorNumero == 0) {
        // Retorna a mensagem 
        return "Não dividirás por 0";
    }

    //Laço for para realizar o calculo
    while ($maiorNumero >= $menorNumero) {
        // Subtrações sucessivas 
        $maiorNumero -= $menorNumero;
        // Contar a quantidade de vezes que foi necessário subtrair
        $resultado++;
    }

    return "O resultado da divisão é $resultado e o resto é igual a $maiorNumero";
}
?>