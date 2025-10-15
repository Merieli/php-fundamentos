<?php

namespace Alura\DesignPattern\estruturais\facades;

class LogDesconto
{
    public function informar(float $descontoCalculado): void
    {
        // biblioteca de log
        echo "Salvando log de desconto: $descontoCalculado";
    }
}
