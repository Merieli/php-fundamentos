<?php

namespace Alura\DesignPattern\comportamentais\templateMethod;

use Alura\DesignPattern\comportamentais\strategy\Impostos\Imposto;
use Alura\DesignPattern\Orcamento;

class Icpp extends ImpostoCom2Aliquotas
{
     protected function deveAplicarTaxaMaxima(Orcamento $orcamento): bool
    {
        return $orcamento->valor > 500;
    }

    protected function calculaTaxaMaxima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.03;
    }

     protected function calculaTaxaMinima(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.02;
    }
}
