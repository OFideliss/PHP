<?php

//PHP Orientado a Objeto	
//Método construtor

	class Carro {

		private $marca;
		private $modelo;
		private $cor;

			//Construtor -  sempre comeca com ""
		public function __construct($marca, $modelo, $cor) {
				$this->marca = $marca; // pode ser feito dessa forma
				$this->setModelo($modelo); // pode ser feito tambem dessa outra forma
				$this->setCor($cor);
		}


			//Get and Set
		public function getMarca(){
			return $this->marca;
		}

		public function setMarca($marc){
			$this->marca = $marc;
		}

		public function getModelo(){
			return $this->modelo;
		}

		public function setModelo($model){
			$this->modelo = $model;
		}

		public function getCor(){
			return $this->cor;
		}

		public function setCor($cor){
			$this->cor = $cor;
		}
	}

// Instanciando objeto $carro na classe Carro() -  Passando também os parametros
$carro = new Carro("Fiat", "Uno", "Branco");

// $carro->setMarca("Honda");
// $carro->setModelo("City");
// echo "Marca: " . $carro->getMarca() . "<br>";   // Para navegador
// echo "Modelo: " . $carro->getModelo() . "<br>"; // Para navegador
//Para terminal de cmd
echo "\n" . "Marca: " . $carro->getMarca() . "\n";
echo "Modelo: " . $carro->getModelo() . "\n";
echo "Cor: " . $carro->getCor() . "\n";

//Para navegador
// $carro2 = new Carro("Renault", "Oroch");
// echo "<br> Marca: " . $carro2->getMarca() . "<br>";
// echo "Modelo: " . $carro2->getModelo() . "<br>";

//Para terminal de cmd
 $carro2 = new Carro("", "", "");

$carro2->setModelo(readline("Digite o modelo do carro: "));
$carro2->setMarca(readline("Digite o marca do carro: "));
$carro2->setCor(readline("Digite a cor do carro: "));
//
echo "\n" . "Marca: " . $carro2->getMarca() . "\n";
echo "Modelo: " . $carro2->getModelo() . "\n";
echo "Cor: " . $carro2->getCor() . "\n";
?>