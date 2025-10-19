<?php

namespace Alura\DesignPattern\criacionais\builder\NotaFiscal;

use Alura\DesignPattern\estruturais\composite\ItemOrcamento;
use DateTimeInterface;

class NotaFiscal
{
    public string $cnpj;
    public string $razaoSocialEmpresa;
    public array $itens;
    public string $observacoes;
    public DateTimeInterface $dataEmissao;
    public float $valorImpostos;

    public function valor(): float
    {
        $total = array_reduce(
            $this->itens, 
            function(float $acumulador, ItemOrcamento $itemAtual) {
                return $acumulador + $itemAtual->valor();
            }, 
            0
        );

        return $total;
    }
}
