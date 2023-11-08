<?php
$senha = 123456;
$cripto = base64_encode($senha);
$descripto = base64_decode($cripto);

echo "base64 (senha)" . $senha . "<br>";
echo "base64 (encode)" . $cripto . "<br>";
echo "base64 (decode)" . $descripto . "<br>";

echo "<br>";

echo "MD5 (senha)" . $senha . "<br>";
echo "MD5 (encode)" . md5($senha) . "<br>";

echo "<br>";

echo "SHA1 (senha)" . $senha . "<br>";
echo "SHA1 (encode)" . sha1($senha) . "<br>";
?>