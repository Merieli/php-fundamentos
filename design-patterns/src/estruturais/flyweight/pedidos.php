<?php


use Alura\DesignPattern\comportamentais\state\Orcamento;
use Alura\DesignPattern\estruturais\flyweight\DadosExtrinsecosPedido;
use Alura\DesignPattern\estruturais\flyweight\Pedido;

require __DIR__ . '/../../../vendor/autoload.php';

$pedidos = [];
$dados = new DadosExtrinsecosPedido( md5('a'), new DateTimeImmutable());

$hoje =  new DateTimeImmutable();

for ($i = 0; $i < 10000; $i++) {
    $pedido = new Pedido();
    $pedido->dados = $dados;
    $pedido->orcamento = new Orcamento();

    $pedidos[] = $pedido;
}

// Funcao para obter o consumo de memoria de uma parte
echo memory_get_peak_usage();
