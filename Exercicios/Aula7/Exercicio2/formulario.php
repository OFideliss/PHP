<?php
include  "exercicio.php";
$gCelsius = $_POST['gCelsius'];         // pega o valor digitado na pagina html
$gFarenheit = $_POST['gFarenheit'];     // pega o valor digitado na pagina html
echo exercicio($gCelsius,$gFarenheit); // chama a função do arquivo exercicio1.php
?>