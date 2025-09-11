<?php

namespace Alura\DesignPattern\comportamentais\command;

use Alura\DesignPattern\comportamentais\observer\acoesAoGerarPedido\CriarPedidoNoDB;
use Alura\DesignPattern\comportamentais\observer\acoesAoGerarPedido\EnviarPedidoPorEmail;
use Alura\DesignPattern\comportamentais\observer\acoesAoGerarPedido\LogGerarPedido;
use Alura\DesignPattern\comportamentais\state\Orcamento;
use DateTimeImmutable;

/**
 * Lida com a execução do comando
 * É como um Use Case/Application Service em arquitetura limpa, responsável por executar um caso "command"
 */
class GerarPedidoHandler
{
    public function __construct(/* PedidoRepository, MailService */) {
    }

    public function execute(GerarPedido $gerarPedido): void
    {
         $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        $pedidosReposItory = new CriarPedidoNoDB();
        $logGerarPedido = new LogGerarPedido();
        $enviarPedidoPorEmail = new EnviarPedidoPorEmail();
        
        $pedidosReposItory->executaAcao($pedido);
        $logGerarPedido->executaAcao($pedido);
        $enviarPedidoPorEmail->executaAcao($pedido);
    }
}
