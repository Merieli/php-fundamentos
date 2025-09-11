<?php

namespace Alura\DesignPattern\comportamentais\command;

/**
 * É como um Use Case/Application Service em arquitetura limpa
 * Um command é um caso que vai ocorrer na APP só que não importa de onde ele virá.
 */
interface Command
{
    public function execute(): void;
}
