<?php

namespace Alura\DesignPattern\criacionais\abstractFactory\Venda;

use Alura\DesignPattern\estruturais\decorators\Imposto;

/**
 * Essa interface aplica o design pattern Abstract Factory, em que criamos formas de instanciar 
 * objetos relacionados.
 * 
 * Esse padrão permite construir famílias de objetos relacionados entre si, mas sem especificar suas
 * classes concretas.
 * 
 * A partir de uma classe fábrica é possível criar as abstrações concretas.
 */
interface VendaFactory
{
    public function criarVenda(): Venda;
    public function imposto(): Imposto;
}
