<?php

use Alura\DesignPattern\comportamentais\command\GerarPedido;
use Alura\DesignPattern\comportamentais\command\GerarPedidoHandler;

require_once __DIR__ . '/../../../vendor/autoload.php';

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();
$gerarPedidoHandler->execute($gerarPedido);

