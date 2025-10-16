<?php

namespace Alura\DesignPattern\estruturais\proxy;

use Alura\DesignPattern\estruturais\composite\Orcavel;

class ItemOrcamento implements Orcavel
{
    public float $valor;

    public function valor(): float
    {
        sleep(5);
        return $this->valor;
    }
}
