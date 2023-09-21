<?php
include  "exercicio.php"; // incluir o arquivo em que esta a function
$lado1 = $_POST['lado1'];  // pega o valor digitado na pagina html
$lado2 = $_POST['lado2'];  // pega o valor digitado na pagina html
$lado3 = $_POST['lado3'];  // pega o valor digitado na pagina html
echo exercicio($lado1,$lado2,$lado3); // chama a função do arquivo exercicio.php

?>