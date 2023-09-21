<?php
include  "exercicio.php"; // incluir o arquivo em que esta a function
$KmPerorrido = $_POST['KmPerorrido'];  // pega o valor digitado na pagina html
$ConsumoLitros = $_POST['ConsumoLitros'];  // pega o valor digitado na pagina html
$PrecoCombustivel = $_POST['PrecoCombustivel'];  // pega o valor digitado na pagina html
echo exercicio($KmPerorrido,$ConsumoLitros,$PrecoCombustivel); // chama a função do arquivo exercicio.php

?>