<?php

namespace Alura\DesignPattern\comportamentais\state\estadosOrcamento;

use Alura\DesignPattern\state\Orcamento;

class EmAprovacao extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.05;
    }

    public function aprova(Orcamento $orcamento): void
    {
        $orcamento->estadoAtual = new Aprovado();
    }
    
    public function reprova(Orcamento $orcamento): void
    {
        $orcamento->estadoAtual = new Reprovado();
    }
}