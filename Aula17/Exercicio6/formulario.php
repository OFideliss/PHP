<?php
include  "exercicio.php"; // incluir o arquivo em que esta a function
$numero1 = $_POST['numero1'];  // pega o valor digitado na pagina html
$numero2 = $_POST['numero2'];  // pega o valor digitado na pagina html
echo exercicio1($numero1, $numero2); // chama a função do arquivo exercicio.php

?>