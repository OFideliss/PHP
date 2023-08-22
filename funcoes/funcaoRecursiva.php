<?php
//função recursiva

function recursiva($numero) {


function calculo($fatorial,$resultado) {
	while ($fatorial>0) {
if ($fatorial==1) {
	return $resultado;
}
//return $fatorial;
$resultado=$resultado*$fatorial;
$fatorial--;
}
}
echo calculo($numero,1);
}
echo recursiva(3);
//?> 