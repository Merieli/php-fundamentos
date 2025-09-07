<?php

namespace Alura\DesignPattern\comportamentais\command;

use Alura\DesignPattern\state\Orcamento;
use DateTimeImmutable;

/**
 * Classe com padrão Command a ser executada para preparar o pedido
 */
class GerarPedido implements Command
{
    public function __construct(
        private float $valorOrcamento,
        private int $numeroItens,
        private string $nomeCliente
    ) {
    }

    public function execute(): void
    {
        $orcamento = new Orcamento();
        $orcamento->quantidadeItens = $this->numeroItens;
        $orcamento->valor = $this->valorOrcamento;

        $pedido = new Pedido();
        $pedido->dataFinalizacao = new DateTimeImmutable();
        $pedido->nomeCliente = $this->nomeCliente;
        $pedido->orcamento = $orcamento;

        echo 'Cria pedido no banco de dados' . PHP_EOL;
        echo 'Envia e-mail para o cliente' . PHP_EOL;
    }
}
