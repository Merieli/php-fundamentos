<?php

namespace Alura\DesignPattern\comportamentais\strategy\Impostos;

use Alura\DesignPattern\Orcamento;



class Iss implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.06;
    }
}
