<?php

namespace Alura\DesignPattern\comportamentais\observerSpl\acoesAoGerarPedido;

use SplObserver;
use SplSubject;

class LogGerarPedido implements SplObserver
{
    public function update(SplSubject $pedido): void 
    {
        echo "Gerando log de geração de pedido" . PHP_EOL;
    }
}
