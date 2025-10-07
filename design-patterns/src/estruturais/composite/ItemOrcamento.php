<?php

namespace Alura\DesignPattern\estruturais\composite;

class ItemOrcamento implements Orcavel
{
    public float $valor;

    public function valor(): float
    {
        return $this->valor;
    }
}
