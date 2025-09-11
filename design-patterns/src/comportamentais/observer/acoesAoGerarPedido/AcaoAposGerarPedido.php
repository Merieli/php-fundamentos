<?php

namespace Alura\DesignPattern\comportamentais\observer\acoesAoGerarPedido;

use Alura\DesignPattern\comportamentais\command\Pedido;

interface AcaoAposGerarPedido
{
    public function executaAcao(Pedido $pedido): void;
}
