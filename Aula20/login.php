<?php

//  ============================ Classe Login  ============================
class Login{
	//Atributos
	private $usuario;
	private $senha;

	// ============================ Getters / Setters ============================

	// ===== Atributo usuario =====
	public function getUsuario(){
		return $this->usuario;
	}

	public function setUsuario($e){
		$this->usuario = $e;
	}

	// ===== Atributo senha =====
	public function getSenha(){
		return $this->senha;
	}

	public function setSenha($e){
		$this->senha = $e;
	}

	// ============================ Método ============================
	public function Logar() {
		if ($this->usuario == "userphp" and $this->senha =="1234"):
			echo "Logado com sucesso!";
		else:
			echo "Dados inválidos...";
		endif;
	}

}

//instanciando objeto
$logar = new Login();
//Setando atributos
//$logar->usuario = "userphp";
//$logar->senha = "1234";
//chamando método

// Chamando os Setters
$logar->setUsuario("userphp");
$logar->setSenha("1234");

$logar->Logar();
echo "<br>";

//Chamando os Getters e imprimir na tela
echo $logar->getUsuario();
echo "<br>";
echo $logar->getSenha();
?>