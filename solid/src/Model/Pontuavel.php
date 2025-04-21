<?php

namespace Alura\Solid\Model\Pontuavel;

/**
 * Open Closed Principle -> Princípio Aberto e Fechado, ou seja, entidades de software "classes, 
 * módulos, funções, etc" devem estar abertas para extensão/expansão e fechadas para modificação. Essa interface pontuavel define a assinatura de um método que pode ser implementado por outras classes, sem que eu precise modificar uma outra classe para adicionar uma nova funcionalidade.
 * Se um método muda a forma como realiza sua tarefa, desde que a interface se mantenha, não vamos 
 * precisar nos preocupar nem em editar o nosso código.
 */
interface Pontuavel
{
    public function recuperarPontuacao(): int;
}
