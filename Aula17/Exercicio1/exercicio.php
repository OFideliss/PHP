<?php

function exercicio1($numero) {
//================Verifica número positivo/negativo/zero
    if ( $numero > 0) {
    return "$numero: Valor Positivo";
        } 
        elseif ($numero < 0) {
    return "$numero: Valor Negativo";
        } else {
    return " $numero: Igual a Zero ";
        }
}

?>