<?php

	class Produto {

		private $codigo;
		private $nome;
		private $preco;


	public function getCodigo(){
		return $this->codigo;
	}	

	public function setCodigo(){
		$this->codigo = $codigo;
	}

	public function getNome(){
		return $this->nome;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getPreco(){
		return $this->preco;
	}

	public function setPreco($preco){
		$this->preco = $preco;
	}
	}


?>