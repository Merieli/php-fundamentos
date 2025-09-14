<?php

namespace Alura\DesignPattern\comportamentais\observerSpl;

use Alura\DesignPattern\comportamentais\command\Pedido;
use Alura\DesignPattern\comportamentais\observerSpl\acoesAoGerarPedido\AcaoAposGerarPedido;
use Alura\DesignPattern\comportamentais\state\Orcamento;
use DateTimeImmutable;
use SplObserver;
use SplSubject;

/**
 * Esse é o padrão observer usando interfaces genéricas do PHP a Spl
 */
class GerarPedidoHandler implements SplSubject
{
    /** @var SplObserver[] */
    private array $acoesAposGerarPedido = [];
    public Pedido $pedido;

    public function __construct(/* PedidoRepository, MailService */) {
    }

    public function execute(GerarPedido $gerarPedido): void
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $gerarPedido->getNumeroItens();
        $orcamento->valor = $gerarPedido->getValorOrcamento();

        /**
         * No observer o Pedido é o sujeito da ação
         */
        $this->pedido = new Pedido();
        $this->pedido->dataFinalizacao = new DateTimeImmutable();
        $this->pedido->nomeCliente = $gerarPedido->getNomeCliente();
        $this->pedido->orcamento = $orcamento;

        $this->notify();
    }

    /**
     * Salva no array algum observer
     */
    public function attach(SplObserver $observer)
    {
        $this->acoesAposGerarPedido[] = $observer;
    }   

    /**
     * Serve para remover um observer do array
     */
    public function detach(SplObserver $observer): void
    {
        // Não precisa ser implementado nese casoi
    }

    /**
     * Chama todos os observers para executar suas ações
     */
    public function notify(): void
    {
        foreach ($this->acoesAposGerarPedido as $acao) {
            $acao->update($this);
        }
    }
}
