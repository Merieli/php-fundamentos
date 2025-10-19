<?php

use Alura\DesignPattern\criacionais\factory\Venda\VendaProduto;
use Alura\DesignPattern\criacionais\factory\Venda\VendaProdutoFactory;
use Alura\DesignPattern\criacionais\factory\Venda\VendaServicoFactory;

require __DIR__ . '/../../../vendor/autoload.php';

$fabricaVenda = new VendaProdutoFactory( 1000);
$venda = $fabricaVenda->criarVenda();
$imposto = $fabricaVenda->imposto();

var_dump($venda, $imposto);

