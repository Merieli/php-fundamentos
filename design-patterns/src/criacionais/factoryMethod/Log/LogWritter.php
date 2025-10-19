<?php

namespace Alura\DesignPattern\criacionais\factoryMethod\Log;

interface LogWritter
{
    public function log(string $mensagemFormatada): void;
}
