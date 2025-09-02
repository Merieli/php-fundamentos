<?php

namespace Alura\DesignPattern\comportamentais\state\estadosOrcamento;

use Alura\DesignPattern\state\Orcamento;
use DomainException;

class Finalizado extends EstadoOrcamento
{
    public function calculaDescontoExtra(Orcamento $orcamento): float
    {
        throw new DomainException(
            'Um orçamentos finalizado não pode receber desconto'
        );
    }
}
