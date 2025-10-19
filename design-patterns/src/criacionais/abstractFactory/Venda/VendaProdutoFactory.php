<?php

namespace Alura\DesignPattern\criacionais\abstractFactory\Venda;

use Alura\DesignPattern\estruturais\decorators\Icms;
use Alura\DesignPattern\estruturais\decorators\Imposto;
use DateTimeImmutable;

class VendaProdutoFactory implements VendaFactory
{
    private int $pesoProduto;

    public function __construct( $pesoProduto)
    {
        $this->pesoProduto = $pesoProduto;
    }

    public function criarVenda(): Venda
    {
        return new VendaProduto(
            new DateTimeImmutable(), 
            $this->pesoProduto
        );
    }

    public function imposto(): Imposto
    {
        return new Icms();
    }
}
