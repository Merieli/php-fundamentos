<?php

namespace Alura\DesignPattern\comportamentais\strategy\Impostos;

use Alura\DesignPattern\Orcamento;



interface Imposto
{
    public function calculaImposto(Orcamento $orcamento): float;
}
