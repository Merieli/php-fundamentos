<?php

namespace Alura\DesignPattern\comportamentais\observer;

use Alura\DesignPattern\comportamentais\command\Pedido;
use Alura\DesignPattern\comportamentais\observer\acoesAoGerarPedido\AcaoAposGerarPedido;
use Alura\DesignPattern\comportamentais\state\Orcamento;
use DateTimeImmutable;

/**
 * Lida com a execução do comando
 * É como um Use Case/Application Service em arquitetura limpa, responsável por executar um caso "command"
 */
class GerarPedidoHandler
{
    private array $acoesAposGerarPedido = [];

    public function __construct(/* PedidoRepository, MailService */) {
    }

    /**
     * Adiciona as acoes que serao executadas pós geracao de pedido
     */
    public function adicionarAcaoAoGerarPedido(AcaoAposGerarPedido $acao)
    {
        $this->acoesAposGerarPedido[] = $acao;
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

        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->executaAcao($pedido);
        }
    }
}
