<?php

namespace Alura\DesignPattern\criacionais\abstractFactory\Venda;

use Alura\DesignPattern\estruturais\decorators\Imposto;
use Alura\DesignPattern\estruturais\decorators\Iss;
use DateTimeImmutable;

class VendaServicoFactory implements VendaFactory
{
    public string $nomePrestador;

    public function __construct(string $nomePrestador)
    {
        $this->nomePrestador = $nomePrestador;
    }

    public function criarVenda(): Venda
    {
        return new VendaServico(
            new DateTimeImmutable(),
            $this->nomePrestador
        );
    }

    public function imposto(): Imposto
    {
        return new Iss();
    }
}
