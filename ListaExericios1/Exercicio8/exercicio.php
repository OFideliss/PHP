<?php

function exercicio($primosAteMil) {
  
$resultado = "";

for ($i=1; $i <=$primosAteMil ; $i++) { 
    
    if ( ($i % $i == 0) && ($i / 1 == 0) ) {

        $resultado .= "O número $i é um número primo. <br>";

    } 
                 
}

    return $resultado;
 
}


?>




<!--

function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function exercicio($primosAteMil) {
    $result = "";

    for ($i = 1; $i <= $primosAteMil; $i++) {
        if (isPrime($i)) {
            $result .= "O número $i é um número primo<br>";
        }
    }

    return $result;
}

$primosAteMil = 1000;
echo exercicio($primosAteMil);

 -->
