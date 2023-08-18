<?php
//=================Function================
function adicao($valor1,$valor2) {
	$resultado = ($valor1+$valor2);
	echo "<br>";
	return "Resultado da soma $valor1+$valor2= $resultado";
}
function subtracao($valor1,$valor2) {
	$resultado = ($valor1-$valor2);
	echo "<br>";
	return "Resultado subtração $valor1-$valor2= $resultado";
}
function multiplica($valor1,$valor2) {
	$resultado = ($valor1*$valor2);
	echo "<br>";
	return "Resultado multiplicação  $valor1*$valor2= $resultado";
}
function divisao($valor1,$valor2) {
	if ($valor2==0) {
		echo "<br>";
		return "Resultado da divisão entre $valor1/$valor2: Não é possivel dividir por 0";
	}
	$resultado = ($valor1/$valor2);
	echo "<br>";
	return "Resultado da divisão $valor1/$valor2 = $resultado";
}

echo adicao(2,2);
echo subtracao(2,2);
echo multiplica(2,2);
echo divisao(2,2);
//=========================================
?>