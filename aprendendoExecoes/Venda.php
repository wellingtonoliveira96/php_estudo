<?php 

namespace Venda;

use VendaException\VendaException;

class Venda{
	private $itens = [];

	public function adicionar($ItemVenda){
			//throw new \InvalidArgumentException("Erro");
			if($ItemVenda == null){
			throw new VendaException(1000, "Item não pode ser nulo");
		}

		array_push($this -> itens, $ItemVenda);
	}

	public function getTotal(){
		$total = 0;

		/*
		if(!count($this->itens)){
			throw new \LogicException("Quantidade de itens inválida. ");
		}
		*/

		foreach ($this -> itens as $item){
			$total += $item -> getPreco();
		}

		return $total;
	}
}