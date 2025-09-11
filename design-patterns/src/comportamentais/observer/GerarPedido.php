<?php

namespace Alura\DesignPattern\comportamentais\observer;

/**
 * Classe com padrão Command a ser executada para preparar o pedido
 */
class GerarPedido 
{
    public function __construct(
        private float $valorOrcamento,
        private int $numeroItens,
        private string $nomeCliente
    ) {
    }

    /**
     * Get the value of nomeCliente
     */
    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }

    /**
     * Get the value of numeroItens
     */
    public function getNumeroItens()
    {
        return $this->numeroItens;
    }

    /**
     * Get the value of valorOrcamento
     */
    public function getValorOrcamento()
    {
        return $this->valorOrcamento;
    }
}
