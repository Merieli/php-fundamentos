<?php

namespace Alura\DesignPattern\comportamentais\observerSpl\acoesAoGerarPedido;

use SplObserver;
use SplSubject;

class EnviarPedidoPorEmail implements SplObserver
{
    public function update(SplSubject $pedido): void 
    {
        /** @var \Alura\DesignPattern\comportamentais\command\Pedido $currentPedido */
        $currentPedido = $pedido->pedido;
        echo $currentPedido->nomeCliente . PHP_EOL;
        echo "Enviando email de pedido gerado" . PHP_EOL;
    }
}
