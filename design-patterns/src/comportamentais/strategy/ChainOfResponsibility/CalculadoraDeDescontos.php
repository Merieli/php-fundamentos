<?php

namespace Alura\DesignPattern\comportamentais\strategy\ChainOfResponsibility;

use Alura\DesignPattern\comportamentais\strategy\ChainOfResponsibility\descontos\DescontoMaisDe500Reais;
use Alura\DesignPattern\comportamentais\strategy\ChainOfResponsibility\descontos\DescontoMaisDe5Itens;
use Alura\DesignPattern\comportamentais\strategy\ChainOfResponsibility\descontos\SemDesconto;
use Alura\DesignPattern\Orcamento;

/**
 * Aplica o pattern Chain of Responsibility para resolver o problema de crescimento infinito da
 * classe
 */
class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontoMaisDe5Itens(
            new DescontoMaisDe500Reais(
                new SemDesconto()
            )
        );


        return $cadeiaDeDescontos->calculaDesconto($orcamento);
    }
}
