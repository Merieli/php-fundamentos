<?php

namespace Alura\DesignPattern\estruturais\bridge\relatorio;

use Alura\DesignPattern\comportamentais\state\Orcamento;

class OrcamentoExportado implements ConteudoExportado
{
    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento) {
        $this->orcamento = $orcamento;
    }

    public function conteudo(): array
    {
        return [
            'valor' => $this->orcamento->valor,
            'quantidade_itens' => $this->orcamento->quantidadeItens
        ];
    }
}
