<?php

function exercicio($numero1) {

$resultado = 1;
$ref = $numero1;
for ($i=0; $i <$numero1 ; $i++) { 
    $resultado*=$ref;
    $ref--;
}

    return "O resultado da multiplicação é : $resultado";
}


?>