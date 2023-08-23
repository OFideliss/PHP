<?php

function soma($a,$b) {
$resultado = $a+$b;
echo "<br>";
return "O resultado da soma entre $a + $b é igual a $resultado";
}

function potencia($a,$b) {
	$resultado=1;
	for ($i=0; $i < $b; $i++) { 
		$resultado*=$a;
	}
echo "<br>";
return "O resultado de $a elevado a $b é igual a $resultado";
}
?>

