<?php
include  "exercicio.php"; // incluir o arquivo em que esta a function
$areaMetros = $_POST['area'];  // pega o valor digitado na pagina html
echo exercicio18L($areaMetros); // chama a função do arquivo exercicio.php
echo exercicio36L($areaMetros); // chama a função do arquivo exercicio.php
echo exercicioMelhor($areaMetros); // chama a função do arquivo exercicio.php

?>