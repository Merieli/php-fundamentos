<?php

namespace Alura\DesignPattern\estruturais\composite;

class ItemOrcamento implements Orcavel
{
    public float $valor = 0;

    public function valor(): float
    {
        return $this->valor;
    }
}
