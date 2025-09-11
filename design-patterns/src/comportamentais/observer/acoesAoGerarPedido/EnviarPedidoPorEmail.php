<?php

namespace Alura\DesignPattern\comportamentais\observer\acoesAoGerarPedido;

use Alura\DesignPattern\comportamentais\command\Pedido;

class EnviarPedidoPorEmail
{
    public function executaAcao(Pedido $pedido): void 
    {
        echo "Enviando email de pedido gerado";
    }
}
