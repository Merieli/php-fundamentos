<?php

namespace Alura\DesignPattern\criacionais\factoryMethod\Log;

class StdoutLogManager extends LogManager
{
    public function criarLogWritter(): LogWritter
    {
        return new StdoutLogWritter();
    }
}
