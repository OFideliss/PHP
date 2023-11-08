<?php
//$lifeTime = 10;
session_set_cookie_params(['httponly' => true]);

session_start();

var_dump(session_id());
session_regenerate_id();
// Pois são enviados na cabeçalho do HTTP

$_SESSION['nome'] = " Maria"; //Manda setar a variável

echo "<a href='sessao2.php'>Teste Sessao 01 </a>";
echo "<br>";
echo session_id();
?>