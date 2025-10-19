<?php

namespace Alura\DesignPattern\criacionais\factoryMethod\Log;

class StdoutLogWritter implements LogWritter
{
    public function log(string $mensagemFormatada): void
    {
        echo $mensagemFormatada;
    }
}
