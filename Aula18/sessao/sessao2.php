<?php
session_start();
echo "NOME: " . $_SESSION['user'] ."<br>" ;
echo "SENHA: " . $_SESSION['pass'] ."<br>";
echo session_id()


?>