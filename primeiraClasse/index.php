<?php

include_once("Expiravel.php");
include_once("Produto.php");
include_once("Assinatura.php");

$Assinatura = new Assinatura();

$Assinatura -> setCodigo(123);
$Assinatura -> setNome("Assinatura MVP");
$Assinatura -> setPreco(49.99);
$Assinatura -> setDataExpiracao("2019-12-31");

echo "Dias restantes da assinatura: {$Assinatura -> getTempoRestante() -> days} ";

?>