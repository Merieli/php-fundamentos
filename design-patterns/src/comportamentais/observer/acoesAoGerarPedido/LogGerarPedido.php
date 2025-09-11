<?php

namespace Alura\DesignPattern\comportamentais\observer\acoesAoGerarPedido;

use Alura\DesignPattern\comportamentais\command\Pedido;

class LogGerarPedido implements AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void 
    {
        echo "Gerando log de geração de pedido" . PHP_EOL;
    }
}
