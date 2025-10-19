<?php

namespace Alura\DesignPattern\criacionais\factoryMethod\Log;

/**
 * Factory Method Pattern, que é uma específicação do `template method`, conhecido também como
 * "Virtual Constructor", é constituído de um método abstrato que constrói.
 */
abstract class LogManager
{
    public function log(string $severidade, string $mensagem): void
    {
        /** @var LogWritter $logWritter */
        $logWritter = $this->criarLogWritter();

        $dataHoje = date('d/m/Y');
        $mensagemFormatada = "[$dataHoje] [$severidade]: $mensagem";

        $logWritter->log($mensagemFormatada);
    }

    /** Metodo fabricador que será implementado nas classes específicas*/
    abstract public function criarLogWritter(): LogWritter;
}
