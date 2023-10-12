<?php
include  "exercicio.php"; // incluir o arquivo em que esta a function
$nota1 = $_POST['nota1'];  // pega o valor digitado na pagina html
$nota2 = $_POST['nota2'];  // pega o valor digitado na pagina html
$nota3 = $_POST['nota3'];  // pega o valor digitado na pagina html
echo exercicio1($nota1, $nota2, $nota3); // chama a função do arquivo exercicio.php

?>