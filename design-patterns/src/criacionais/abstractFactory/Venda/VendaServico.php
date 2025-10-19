<?php

namespace Alura\DesignPattern\criacionais\abstractFactory\Venda;

use DateTimeImmutable;

class VendaServico extends Venda
{
    private string $nomePrestador;

    public function __construct(DateTimeImmutable $dataRealizacao, string $nomePrestador) {
        parent::__construct($dataRealizacao);

        $this->nomePrestador = $nomePrestador;
    }
}
