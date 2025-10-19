<?php

namespace Alura\DesignPattern\criacionais\prototype\NotaFiscal;

use Alura\DesignPattern\estruturais\composite\ItemOrcamento;
use DateTimeImmutable;
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

    public function clonar(): NotaFiscal
    {
        $cloneNotaFiscal = new NotaFiscal();
        $cloneNotaFiscal->cnpj = $this->cnpj;
        $cloneNotaFiscal->razaoSocialEmpresa = $this->razaoSocialEmpresa;
        $cloneNotaFiscal->itens = $this->itens;
        $cloneNotaFiscal->observacoes = $this->observacoes;
        $cloneNotaFiscal->dataEmissao = new DateTimeImmutable();
        $cloneNotaFiscal->valorImpostos = $this->valorImpostos;

        return $cloneNotaFiscal;
    }

    /**
     * Esse é um método mágico do php que é chamado automaticamente pelo PHP logo após usar a
     * palavra reservada `clone` para clonar objetos.
     * 
     */
    public function __clone()
    {
        $this->dataEmissao = new DateTimeImmutable();
    }
}
