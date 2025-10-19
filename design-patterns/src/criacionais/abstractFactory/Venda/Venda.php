<?php

namespace Alura\DesignPattern\criacionais\abstractFactory\Venda;

use DateTimeImmutable;


abstract class Venda
{
    public DateTimeImmutable $dataRealizacao;

    public function __construct(DateTimeImmutable $dataRealizacao) {
        $this->dataRealizacao = $dataRealizacao;
    }
}
