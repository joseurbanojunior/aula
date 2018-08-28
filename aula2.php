<?php
 class Pessoa {
 	protected $altura;
 	protected $nome;
     
    public function setNome($nome) {
    	$this->nome = $nome;
    }

 	public function andar () {
 		echo "Andando...";
 	}
 }
?>