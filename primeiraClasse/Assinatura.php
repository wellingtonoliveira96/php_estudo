<?php

class Assinatura extends Produto implements Expiravel {

	private $dataExpiracao;

	public function getDataExpiracao(){
		return $this->dataExpiracao;
	}

	public function setDataExpiracao($dataExpiracao){
		this->dataExpiracao = new \DateTime($dataExpiracao)
	}

	public function getTempoRestante(){
		return $this->dataExpiracao->diff(new \DateTime());
	}
}

?>