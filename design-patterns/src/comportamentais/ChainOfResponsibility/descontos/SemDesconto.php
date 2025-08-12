<?php

namespace Alura\DesignPattern\comportamentais\ChainOfResponsibility\descontos;

use Alura\DesignPattern\Orcamento;

class SemDesconto extends Desconto
{
    /** Sobrescreve o construtor do pai para não exigir nada a mais de parametros */
    public function __construct() {
        parent::__construct(null);
    }

    public function calculaDesconto(Orcamento $orcamento): float
    {
        return 0;
    }
}
