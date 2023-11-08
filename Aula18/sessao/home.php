<?php
session_start();

$_SESSION['user'] = "admin";
$_SESSION['pass'] = "1234";

if (isset($_SESSION['user'])) {
	var_dump($_SESSION['user']);
echo "<br>";
echo $_SESSION['user']."<br>";
echo $_SESSION['pass']."<br>";

echo session_id();
}else{
	echo "NOT FOUND";
}
?>