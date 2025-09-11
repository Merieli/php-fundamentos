<?php

namespace Alura\DesignPattern\comportamentais\observer\acoesAoGerarPedido;

use Alura\DesignPattern\comportamentais\command\Pedido;

class CriarPedidoNoDB
{
    public function executaAcao(Pedido $pedido): void 
    {
        echo "Salvando pedido no banco de dados";
    }
}
