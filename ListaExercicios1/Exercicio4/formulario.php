<?php
include  "exercicio.php"; // incluir o arquivo em que esta a function
$numero1 = $_POST['numero1'];  // pega o valor digitado na pagina html
echo exercicio($numero1); // chama a função do arquivo exercicio.php

?>