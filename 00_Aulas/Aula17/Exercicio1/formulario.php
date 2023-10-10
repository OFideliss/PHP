<?php
include  "exercicio.php"; // incluir o arquivo em que esta a function
$numero = $_POST['numero'];  // pega o valor digitado na pagina html
echo exercicio1($numero); // chama a função do arquivo exercicio.php

?>