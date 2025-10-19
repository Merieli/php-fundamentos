<?php

namespace Alura\DesignPattern\criacionais\abstractFactory\Venda;

use DateTimeImmutable;

class VendaProduto extends Venda
{
    /**
     * @var int Peso do produto em gramas
     */
    private int $pesoProduto;

    public function __construct(DateTimeImmutable $dataRealizacao, int $pesoProduto) {
        parent::__construct($dataRealizacao);

        $this->pesoProduto = $pesoProduto;
    }
}
