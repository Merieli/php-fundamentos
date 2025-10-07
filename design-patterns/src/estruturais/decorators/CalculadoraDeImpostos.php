<?php

namespace Alura\DesignPattern\estruturais\decorators;

use Alura\DesignPattern\Orcamento;


class CalculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento, Imposto $imposto): float
    {
        return $imposto->calculaImposto($orcamento);
    }
}
