<?php

namespace Alura\DesignPattern\state;

use Alura\DesignPattern\comportamentais\state\estadosOrcamento\EmAprovacao;
use Alura\DesignPattern\comportamentais\state\estadosOrcamento\EstadoOrcamento;
use DomainException;

class Orcamento
{
    public int $quantidadeItens;
    public float $valor;
    public EstadoOrcamento $estadoAtual;

    public function __construct() {
        $this->estadoAtual = new EmAprovacao();
    }

    public function aplicaDescontoExtra()
    {
        $this->valor -= $this->estadoAtual->calculaDescontoExtra($this);
    }
}
