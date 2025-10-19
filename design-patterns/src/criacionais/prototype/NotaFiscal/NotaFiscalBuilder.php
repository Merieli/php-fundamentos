<?php

namespace Alura\DesignPattern\criacionais\prototype\NotaFiscal;

use Alura\DesignPattern\estruturais\composite\ItemOrcamento;
use DateTimeImmutable;
use DateTimeInterface;

abstract class NotaFiscalBuilder
{
    protected NotaFiscal $notaFiscal;

    public function __construct() {
        $this->notaFiscal = new NotaFiscal();
        $this->notaFiscal->dataEmissao = new DateTimeImmutable();
    }

    public function paraEmpresa(string $cnpj, string $razaoSocial): NotaFiscalBuilder
    {
        $this->notaFiscal->cnpj = $cnpj;
        $this->notaFiscal->razaoSocialEmpresa = $razaoSocial;
        return $this;
    }

    public function comItem(ItemOrcamento $item): NotaFiscalBuilder
    {
        $this->notaFiscal->itens[] = $item;
        return $this;
    }

    public function comObservacoes(string $observacoes): NotaFiscalBuilder
    {
        $this->notaFiscal->observacoes = $observacoes;
        return $this;
    }

    public function comDataEmissao(DateTimeInterface $dataEmissao): NotaFiscalBuilder
    {
        $this->notaFiscal->dataEmissao = $dataEmissao;
        return $this;
    }

    abstract public function build(): NotaFiscal;
}
