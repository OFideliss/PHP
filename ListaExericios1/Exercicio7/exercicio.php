<?php

function exercicio($numeroEntrada) {

//Condições IF para descobrir o mês correspondente

    if ($numeroEntrada == 1) { //Mês de Janeiro

        return "O número $numeroEntrada corresponde ao mês de Janeiro";
    } elseif ($numeroEntrada == 2) { //Mês de Fevereiro
        return "O número $numeroEntrada corresponde ao mês de Fevereiro";
    } elseif ($numeroEntrada == 3) { //Mês de Março
        return "O número $numeroEntrada corresponde ao mês de Março";
    } elseif ($numeroEntrada == 4) { //Mês de Abril
        return "O número $numeroEntrada corresponde ao mês de Abril";
    } elseif ($numeroEntrada == 5) { //Mês de Maio
        return "O número $numeroEntrada corresponde ao mês de Maio";
    } elseif ($numeroEntrada == 6) { //Mês de Junho
        return "O número $numeroEntrada corresponde ao mês de Junho";
    } elseif ($numeroEntrada == 7) { //Mês de Julho
        return "O número $numeroEntrada corresponde ao mês de Julho";
    } elseif ($numeroEntrada == 8) { //Mês de Agosto
        return "O número $numeroEntrada corresponde ao mês de Agosto";
    } elseif ($numeroEntrada == 9) { //Mês de Setembro
        return "O número $numeroEntrada corresponde ao mês de Setembro";
    } elseif ($numeroEntrada == 10) { //Mês de Outubro
        return "O número $numeroEntrada corresponde ao mês de Outubro";
    } elseif ($numeroEntrada == 11) { //Mês de Novembro
        return "O número $numeroEntrada corresponde ao mês de Novembro";
    } elseif ($numeroEntrada == 12) { //Mês de Dezembro
        return "O número $numeroEntrada corresponde ao mês de Dezembro";
    } else { //Caso não exista o mês correspondente ao número digitado
        return "O número $numeroEntrada não corresponde a nenhum mês";
    }
    
}


?>