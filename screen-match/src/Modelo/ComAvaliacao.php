<?php

namespace ScreenMatch\Modelo;

use ScreenMatch\Exception\NotaInvalidaException;

// Uma trait em PHP é um mecanismo para reutilizar código sem duplicação, com Herança Horizontal, ou seja, sem estender outra classe, mas utilizando a trait. Para usá-la deve ser chamado `use ComAvaliacao` onde for necessário. Uma trait não é um tipo, mas uma característica que uma classe utiliza.
trait ComAvaliacao
{
    private array $notas = [];

    /**
     * Summary of avalia
     * @param float $nota
     * @throws NotaInvalidaException Se a nota for negativa ou maior do que 10
     * @return void
     */
    public function avalia(float $nota): void
    {
        if ($nota < 0 || $nota > 10) {
            throw new NotaInvalidaException();
        }

        $this->notas[] = $nota;
    }

    public function media(): float
    {
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);

        return $somaNotas / $quantidadeNotas;
    }

}
