<?php
//Conceito de Herança
	class Veiculo{
		//Atributos
		private $marca;
		private $modelo;

		//Métodos
		public function Ligar(){
			echo "Ligando... \n";
		}

		public function Desligar(){
			echo "Desligando... \n";
		}
	}

	// Classe filho Carro HERDA métodos e atributos da classe pai Veiculo
	class Carro extends Veiculo{
		//Atributos
		private $numeroRodas;

		//Métodos
		public function acelerar(){
			echo "Acelerando o carro... \n";
		}
	}

	// Classe filho Moto HERDA métodos e atributos da classe pai Veiculo
	class Moto extends Veiculo{
		//Atributos
		private $numeroRodas;

		//Métodos
		public function acelerar(){
			echo "Acelerando a moto... \n";
		}
	}

	$carro = new Carro();
	$carro->marca = "Honda";
	// echo $carro->marca;
	 // var_dump($carro);

	$moto = new Moto();
	$moto->Ligar();
	$moto->Acelerar();
	$moto->Desligar();
?>