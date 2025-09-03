<?php

require_once '../../../vendor/autoload.php';

use Alura\DesignPattern\comportamentais\command\Pedido;
use Alura\DesignPattern\state\Orcamento;

$valorOrcamento = $argv[1];
$numeroDeItens = $argv[2];
$nomeCliente = $argv[3];

$orcamento = new Orcamento();
$orcamento->quantidadeItens = (int)$numeroDeItens;
$orcamento->valor = (float)$valorOrcamento;

$pedido = new Pedido();
$pedido->dataFinalizacao = new DateTimeImmutable();
$pedido->nomeCliente = $nomeCliente;
$pedido->orcamento = $orcamento;

echo 'Cria pedido no banco de dados' . PHP_EOL;
echo 'Envia e-mail para o cliente' . PHP_EOL;

