<?php

function exercicio($numero1,$numero2) {

$resultado = 0;
$cont = 0;
if ($numero1>$numero2) {
    $resultado=$numero1;
for ($i = 1; $i <= $numero2; $i++) { 
    $resultado -= $numero2; //Divisão por subtração sucessivas
    $cont++;
}
//=============Retorna o resultado
    return "O resultado da multiplicação é : $cont";
}

}
?>