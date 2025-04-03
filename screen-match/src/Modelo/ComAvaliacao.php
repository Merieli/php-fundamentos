<?php

namespace ScreenMatch\Modelo;

// Uma trait em PHP é um mecanismo para reutilizar código sem duplicação, com Herança Horizontal, ou seja, sem estender outra classe, mas utilizando a trait. Para usá-la deve ser chamado `use ComAvaliacao` onde for necessário. Uma trait não é um tipo, mas uma característica que uma classe utiliza.
trait ComAvaliacao
{
    private array $notas = [];

    public function avalia(float $nota): void
    {
        $this->notas[] = $nota;
    }

    public function media(): float
    {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }

}
