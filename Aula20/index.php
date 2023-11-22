<?php

//Classe
class Pessoa {

	//Atributos - Caracteristicas 
	public $nome;
	public $idade;

	//Método - Ação - Falar
	public function Falar() {
   	//$nome = "Jão";
	//$this->nome = $nome;

		echo $this->nome . ", de " . $this->idade . " anos, está falando...";

	}
}

//Criando um Objeto do tipo Pessoa - Instancia do Objeto
$p = new Pessoa();
//Inserindo os atributos do objeto $p da classe Pessoa - Setando - Set de atributos 
$p->nome = "João";
$p->idade = 15;

//var_dump($p);

//Chamando o método Falar() do Objeto $p, que está instanciado na classe Pessoa
$p->Falar();
//Echo dos atributos do objeto $p
//echo "<br> Nome: " . $p->nome;
//echo "<br> Idade: " . $p->idade;
?>