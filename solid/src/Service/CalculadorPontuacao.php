<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\AluraMais;
use Alura\Solid\Model\Curso;
use Alura\Solid\Model\Pontuavel\Pontuavel;

/**
 * Acomplamento -> quando uma classe precisa conhecer outra classe para funcionar, ou seja, ela 
 * depende de outra classe para funcionar. Se uma das duas classes mudar, a outra também 
 * precisa mudar. Mas não é algo totalmente ruim porque em algumas vezes pode ser necessário,
 * mas o ideal é que a gente tenha o mínimo de acoplamento possível entre as classes.
 * É fato que, se estamos organizando o nosso código, seguindo as recomendações da orientação a objetos, algum acoplamento acontecerá. Algumas classes precisarão de outras, para que não tenham muitas responsabilidades. Cabe a nós medir quando faz sentido adicionar tal acoplamento com as dependências e como depender do que é seguro, ao invés de classes concretas. Falaremos mais sobre isso neste treinamento.
 */
class CalculadorPontuacao
{
    public function recuperarPontuacao(Pontuavel $conteudo)
    {
        return $conteudo->recuperarPontuacao();
    }
}
