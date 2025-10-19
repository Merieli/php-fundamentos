<?php

namespace Alura\DesignPattern\criacionais\factory\Venda;

use DateTimeImmutable;

/**
 * Essa interface aplica o design pattern Abstract Factory, em que criamos formas de instanciar 
 * objetos relacionados.
 * 
 * Esse padrão permite construir famílias de objetos relacionados entre si, mas sem especificar suas
 * classes concretas "ou seja nesse caso sem "
 */
abstract class Venda
{
    public DateTimeImmutable $dataRealizacao;

    public function __construct(DateTimeImmutable $dataRealizacao) {
        $this->dataRealizacao = $dataRealizacao;
    }
}
