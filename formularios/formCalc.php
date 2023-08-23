<?php

include "calc.php"; // incluir a função no arquivo "calc.php"
$numero1 = $_POST['numero1']; // pega o valor digitado na pagina html
$numero2 = $_POST['numero2']; // pega o valor digitado na pagina html

echo soma($numero1,$numero2); // chama a função do arquivo "calc.php"
echo potencia($numero1,$numero2); // chama a função do arquivo "calc.php"
?>