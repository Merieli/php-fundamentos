<?php

namespace Alura\DesignPattern\estruturais\adapter;

use Alura\DesignPattern\comportamentais\state\estadosOrcamento\Finalizado;
use Alura\DesignPattern\comportamentais\state\Orcamento;
use Alura\DesignPattern\estruturais\adapter\Http\HttpAdapter;
use DomainException;

class RegistroDeOrcamento
{
    private HttpAdapter $http;

    public function __construct(HttpAdapter $http) {
        $this->http = $http;
    }

    public function registrar(Orcamento $orcamento): void
    {
        if (!$orcamento->estadoAtual instanceof Finalizado) {
            throw new DomainException('Apenas orçamentos finalizados podem ser registrados');
        }

        $this->http->post('http://api.registrar.orcamento', [
            'valor' => $orcamento->valor,
            'quantidadeItens' => $orcamento->quantidadeItens,
        ]);
    }
}
