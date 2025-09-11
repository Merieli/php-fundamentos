<?php

namespace Alura\DesignPattern\comportamentais\state\estadosOrcamento;

use Alura\DesignPattern\comportamentais\state\Orcamento;
use DomainException;

class Reprovado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new DomainException(
            'Um orçamentos reprovado não pode receber desconto'
        );
    }

    public function finaliza(Orcamento $orcamento)
    {
        $orcamento->estadoAtual = new Finalizado();
    }
}
