<?php

function exercicio($primosAteMil) {

    //Variavel para exibir o resultado
    $resultado = "";

//laço for para percorrer todos numeros de um a mil
    for ($i = 1; $i <= $primosAteMil; $i++) {

        //Define um contado
        $cont = 0;

        //Laço for para descobrir número por número qual é primo ou não
        for ($j = 1; $j <= $i; $j++) {

            //If para contar quantas vezes a divisão de um número pelos seus numeros anteriores tem resto igual a 0
            if ($i % $j == 0) {
                $cont++; // inclementa 1 ao contador
            }
        }

//Dentro do primero laço for ele verifica se a quantidade da variavel cont é igual a dois e se for isso significa que ele é um número imrime
        if ($cont == 2) { // Um número primo tem exatamente dois divisores: 1 e ele mesmo

            //Concatena o número na variavel resultado
            $resultado .= "O número $i é um número primo.<br>";
        }
    }

//Retorna o resultado com todos os número primos concatenados 
    return $resultado;
}


?>
