<?php
include  "exercicio.php"; // incluir o arquivo em que esta a function
$areaMetros = $_POST['area'];  // pega o valor digitado na pagina html
echo exercicio($areaMetros); // chama a função do arquivo exercicio.php
?>