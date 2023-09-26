<?php

function exercicio($numerosPerfeitosAteMil) {

   //Variavel para exibir os números perfeitos de um a mil
   $resultado = "";
   //Array para armazenar todos os fatores de um determinado número
   $arrayMultiplos = array();
   //Variavel para realizar a soma do vetor (Soma dos fatores)
   $somaArray;


  //Primeiro laço For para percorrer todos os número de 1 a 1000
  for ($i=1; $i <=$numerosPerfeitosAteMil ; $i++) { 
    
    //Segundo laço For para percorrer todos os número anteriores de $i e realizar uma divisão
    for ($j=1; $j < $i ; $j++) { 
        
        //If para realizar a divisão e verificar se o resto é igual a 0 (dessa forma o valor é um divisivel do número $i em questão)
        if ($i % $j == 0) {
            //Adiciona ao arrayMultiplos todos os fatores do número $i
           array_push($arrayMultiplos, $j);
        }

    }
       //Soma todos os número do vetor, números esses que são os fatores
      $somaArray = array_sum($arrayMultiplos);

     // Se a soma dos fatores (soma do array de fatores) for igual ao número em si , $i, então ele é um número perfeito
    if ($somaArray == $i) {
    // concatena à variavel $resultado o número perfeito para ser exibido no return 
        $resultado .= "O número $i é um número perfeito. <br>";
    } 
     
     //Após o fim do calculo para saber se o número é perfeito, ele zera o array dos fatores para poder calcular o próximo número $i
     $arrayMultiplos = array();            
}
     
     //Retorna todos os números perfeitos concatenados
    return $resultado;
 
}


?>
