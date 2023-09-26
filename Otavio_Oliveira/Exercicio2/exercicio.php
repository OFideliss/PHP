<?php

function exercicio($numero1,$numero2) {

$resultado = 0;
for ($i = 1; $i <= $numero1; $i++) { 
    $resultado += $numero2; //Multiplicação por somas sucessivas
}
//=============Retorna o resultado
    return "O resultado da multiplicação é : $resultado";
}
?>