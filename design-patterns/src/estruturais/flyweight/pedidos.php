<?php


use Alura\DesignPattern\comportamentais\state\Orcamento;
use Alura\DesignPattern\estruturais\flyweight\Pedido\CriadorDePedido;
use Alura\DesignPattern\estruturais\flyweight\pedido\Pedido;
use Alura\DesignPattern\estruturais\flyweight\pedido\TemplatePedido;


require __DIR__ . '/../../../vendor/autoload.php';

$pedidos = [];
$criadorPedido = new CriadorDePedido();

for ($i = 0; $i < 10000; $i++) {
    $orcamento = new Orcamento();
    $pedido = $criadorPedido->criaPedido(
        'Merieli Manzano',
        date('Y-m-d'),
        $orcamento
    );

    $pedidos[] = $pedido;
}

// Funcao para obter o consumo de memoria de uma parte
echo memory_get_peak_usage();
