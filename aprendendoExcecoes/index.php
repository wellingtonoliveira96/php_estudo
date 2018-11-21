<?php

	use ItemVenda\ItemVenda;
	use Venda\Venda;
	use VendaException\VendaException;

	require_once"VendaException.php";
	require_once "Venda.php"; //incluimos os arquivos da classe Venda
	require_once "ItemVenda.php"; // incluimos os arquivos da class ItemVenda

try { // iniciamos o bloco try 
	$camisa = new ItemVenda();
	$camisa -> setDescricao("Camisa Polo");
	$camisa -> setPreco(12.0);

	$bone = new ItemVenda();  // Instanciando a classe ItemVenda 
	$bone -> setDescricao("Boné Infantil"); //Passando as informações para o objeto 
	$bone -> setPreco(21.0); // Passando as informações para o objeto

	$Venda = new Venda(); // Instanciando a classe Venda
	$Venda -> adicionar(null); // Adicionando um item de venda, mas nesse caso como "null" para reproduzir um erro e gerar uma exceção
	$Venda -> adicionar ($bone);

	print "Total da venda: " . $Venda -> getTotal();


	//iniciado o bloco Catch que é responsável por receber os erros quando são executados, desde que tenha sido erro do tipo Erro ou filho desta classe.
} 	/*
	catch (\Error $e){ 
  		echo "Um problema ocorreu: " . $e -> getMessage();
	catch (\InvalidArgumentException $e){
		echo "Um erro ocorreu: " . $e -> getMessage();
}	catch (LogicException $e){
		echo "Erro: " . $e -> getMessage();
}
	*/
	catch (VendaException $e){
		echo "VendaException: " . $e->getMessage() . " - Codigo: " . $e->getCodigo();
	} finally{
		echo "\nProcessamento encerrado";
	}

?>