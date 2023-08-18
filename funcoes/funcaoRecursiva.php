<?php
//função recursiva

function recursiva($numero) {

$variavel1 =1;
$fatorial;
if ($numero==0) {
	return $variavel1*=1;
}
$fatorial--;
$variavel1*=$fatorial;
return $variavel1;
}

echo recursiva(0);
?> 