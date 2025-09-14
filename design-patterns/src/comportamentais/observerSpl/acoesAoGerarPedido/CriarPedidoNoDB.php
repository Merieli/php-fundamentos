<?php

namespace Alura\DesignPattern\comportamentais\observerSpl\acoesAoGerarPedido;

use SplObserver;
use SplSubject;

class CriarPedidoNoDB implements SplObserver
{
    public function update(SplSubject $pedido): void 
    {
        echo "Salvando pedido no banco de dados" . PHP_EOL;
    }
}
