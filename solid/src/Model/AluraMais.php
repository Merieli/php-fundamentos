<?php

namespace Alura\Solid\Model;

use Alura\Solid\Model\Pontuavel\Pontuavel;

/**
 * Princípio de Substituição de Liskov -> Seja q(x) uma propriedade que se pode provar do objeto x
 * do tipo T. Então, q(y) também é possível provar para o objeto y do tipo S, sendo S um subtipo de 
 * T. "de Barbara Liskov".
 * Ou seja, classes filhas nunca deveriam infrigir as definições de tipo da classe pai "classe base". Se algo tem aparencia de pato, faz barulho de pato, mas precisa de bateria para funcionar, essa abstração esta errada e esse objeto provavelmente não é um pato. Sendo assim existem cenários em que a assinatura dos métodos pode estar correta, mas a implementação pode causar um comportamento inesperado e errado.
 * 
 * Classes filhas sempre devem respeitar toda imposição das classes pai/base, assim a qualquer momento podemos substituir uma clase base por qualquer uma de suas derivadas e não receberemos um comportamento inesperado.
 */
class AluraMais extends Video implements Pontuavel, Assistivel
{
    private $categoria;

    public function __construct(string $nome, string $categoria)
    {
        parent::__construct($nome);
        $this->categoria = $categoria;
    }

    public function recuperarUrl(): string
    {
        return 'http://videos.alura.com.br/' . str_replace(' ', '-', strtolower($this->categoria));
    }

    public function recuperarPontuacao(): int
    {
        return $this->minutosDeDuracao() * 2;
    }
}
