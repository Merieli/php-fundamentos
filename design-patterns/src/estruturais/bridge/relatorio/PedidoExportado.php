<?php

namespace Alura\DesignPattern\estruturais\bridge\relatorio;

use Alura\DesignPattern\comportamentais\command\Pedido;

class PedidoExportado implements ConteudoExportado
{
    private Pedido $pedido;

    public function __construct(Pedido $pedido) {
        $this->pedido = $pedido;
    }

    public function conteudo(): array
    {
        return [
            'data_finalizacao' => $this->pedido->dataFinalizacao->format('d/m/Y'),
            'nome_cliente' => $this->pedido->nomeCliente
        ];
    }
}
