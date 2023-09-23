<?php
include  "exercicio.php"; // incluir o arquivo em que esta a function
$numeroEntrada = $_POST['numeroEntrada'];  // pega o valor digitado na pagina html
echo exercicio($numeroEntrada); // chama a função do arquivo exercicio.php

?>