<?php

function exercicio ($salarioHora,$horasMes) {

$salarioBruto = $salarioHora*$horasMes;
$ir = $salarioBruto*0.11;
$inss = $salarioBruto*0.08;
$sindicato = $salarioBruto*0.05;
$salarioLiquido = $salarioBruto - $ir - $inss - $sindicato;
echo "<br>";

return "Salario bruto: R$$salarioBruto,00 <br>
Descontos :( : <br>
INSS: R$$inss,00 <br>
Sindicato: R$$sindicato,00 <br>
Salario liquido: R$$salarioLiquido,00
";
}

?>