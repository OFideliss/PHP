<?php
include  "exercicio.php"; // incluir o arquivo em que esta a function
$salarioHora = $_POST['salarioHora'];  // pega o valor digitado na pagina html
$horasMes = $_POST['horasMes'];     // pega o valor digitado na pagina html
echo exercicio($salarioHora,$horasMes); // chama a função do arquivo exercicio.php
?>