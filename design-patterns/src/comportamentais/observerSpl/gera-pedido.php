<?php

use Alura\DesignPattern\comportamentais\observerSpl\acoesAoGerarPedido\CriarPedidoNoDB;
use Alura\DesignPattern\comportamentais\observerSpl\acoesAoGerarPedido\EnviarPedidoPorEmail;
use Alura\DesignPattern\comportamentais\observerSpl\acoesAoGerarPedido\LogGerarPedido;
use Alura\DesignPattern\comportamentais\observerSpl\GerarPedidoHandler;
use Alura\DesignPattern\comportamentais\observerSpl\GerarPedido;


require_once __DIR__ . '/../../../vendor/autoload.php';

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();

$gerarPedidoHandler->attach(new CriarPedidoNoDB());
$gerarPedidoHandler->attach(new EnviarPedidoPorEmail()); 
$gerarPedidoHandler->attach(new LogGerarPedido());
        
$gerarPedidoHandler->execute($gerarPedido);

