<?php

function exercicio ($salarioHora,$horasMes) {

$salarioBruto = $salarioHora*$horasMes;
$ir = $salarioBruto*0.11;   // Valor do desconto de Imposto de Renda (IR)
$inss = $salarioBruto*0.08; // Valor do desconto de INSS
$sindicato = $salarioBruto*0.05; // Valor do desconto de sindicato
$salarioLiquido = $salarioBruto - $ir - $inss - $sindicato; // Sálario Liquido
echo "<br>";

return "+ Salario bruto:......R$$salarioBruto,00 <br>
- IR:........................R$$ir,00 <br>
- INSS:...................R$$inss,00 <br>
- Sindicato..............R$$sindicato,00 <br>
- Salario liquido:....R$$salarioLiquido,00
";
}

?>