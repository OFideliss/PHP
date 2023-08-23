<?php

function exercicio ($gCelsius,$gFarenheit) {
$ConversaoParaFarenheit = ((9/5)*$gCelsius)+32;
$ConversaoParaCelsius = ($gFarenheit-32)*(5/9);
echo "<br>";
return "$gCelsius graus Celsius equivalem a $ConversaoParaFarenheit graus Farenheit.
<br>
$gFarenheit graus Farenheit equivalem a $ConversaoParaCelsius graus Celsius.";
}

?>