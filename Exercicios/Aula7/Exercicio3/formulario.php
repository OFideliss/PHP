<?php
include  "exercicio.php";
$salarioHora = $_POST['salarioHora'];  // pega o valor digitado na pagina html
$horasMes = $_POST['horasMes'];     // pega o valor digitado na pagina html
echo exercicio($salarioHora,$horasMes); // chama a função do arquivo exercicio1.php
?>