<?php

namespace Alura\DesignPattern\comportamentais\strategy\Impostos;

use Alura\DesignPattern\Orcamento;



class Icms implements Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.1;
    }
}
