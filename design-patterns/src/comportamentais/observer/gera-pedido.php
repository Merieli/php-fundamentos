<?php

use Alura\DesignPattern\comportamentais\observer\acoesAoGerarPedido\CriarPedidoNoDB;
use Alura\DesignPattern\comportamentais\observer\acoesAoGerarPedido\EnviarPedidoPorEmail;
use Alura\DesignPattern\comportamentais\observer\acoesAoGerarPedido\LogGerarPedido;
use Alura\DesignPattern\comportamentais\observer\GerarPedidoHandler;
use Alura\DesignPattern\comportamentais\observer\GerarPedido;


require_once __DIR__ . '/../../../vendor/autoload.php';

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$gerarPedido = new GerarPedido($valorOrcamento, $numeroDeItens, $nomeCliente);
$gerarPedidoHandler = new GerarPedidoHandler();

$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new CriarPedidoNoDB());
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new EnviarPedidoPorEmail()); 
$gerarPedidoHandler->adicionarAcaoAoGerarPedido(new LogGerarPedido());
        
$gerarPedidoHandler->execute($gerarPedido);

