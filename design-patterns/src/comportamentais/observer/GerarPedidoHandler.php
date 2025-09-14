<?php

namespace Alura\DesignPattern\comportamentais\observer;

use Alura\DesignPattern\comportamentais\command\Pedido;
use Alura\DesignPattern\comportamentais\observer\acoesAoGerarPedido\AcaoAposGerarPedido;
use Alura\DesignPattern\comportamentais\state\Orcamento;
use DateTimeImmutable;

class GerarPedidoHandler
{
    /** @var AcaoAposGerarPedido[] */
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

        /**
         * No observer o Pedido é o sujeito da ação
         */
        $pedido = new Pedido();
        $pedido->dataFinalizacao = new DateTimeImmutable();
        $pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $pedido->orcamento = $orcamento;

        /**
         * E as classes anexadas ao array `acoesAposGerarPedido` são observadores/ouvintes da ação
         * que pega o alvo/sujeito e realiza algo com ele.
         * No mundo real seria mais comum que os observers estivesse no Repository responsável por
         * armazenar os pedidos no banco de dados. Porque o Handler será algo mais simples.
         */
        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->executaAcao($pedido);
        }
    }
}
