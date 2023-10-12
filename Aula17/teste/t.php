<?php

	function multi($a, $b){
		return($a*$b);
	}

	$n = readline("Digite um numero: ");

	for($i=0; $i <= 10; $i++){
		echo ("$n x $i = " . multi($n,$i) . "\n");
	}


?>