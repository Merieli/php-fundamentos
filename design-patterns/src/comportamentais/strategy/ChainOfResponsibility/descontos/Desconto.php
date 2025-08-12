<?php

namespace Alura\DesignPattern\comportamentais\strategy\ChainOfResponsibility\descontos;

use Alura\DesignPattern\Orcamento;

abstract class Desconto
{
    protected ?Desconto $proximoDesconto;

    public function __construct(?Desconto $proximoDesconto) {
        $this->proximoDesconto = $proximoDesconto;

    }

    abstract public function calculaDesconto(Orcamento $orcamento): float;
}
