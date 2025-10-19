<?php

use Alura\DesignPattern\criacionais\abstractFactory\Venda\VendaProdutoFactory;
use Alura\DesignPattern\criacionais\abstractFactory\Venda\VendaServicoFactory;

require __DIR__ . '/../../../vendor/autoload.php';

$fabricaVenda = new VendaProdutoFactory( 1000);
$venda = $fabricaVenda->criarVenda();
$imposto = $fabricaVenda->imposto();

var_dump($venda, $imposto);

