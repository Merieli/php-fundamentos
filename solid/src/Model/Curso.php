<?php

namespace Alura\Solid\Model;

use Alura\Solid\Model\Pontuavel\Pontuavel;

/**
 * Princípio da Inversão de Dependência ->  Abstrações não devem depender de implementações. 
 * Implementações devem depender de abstrações. Ou seja, classes concretas devem depender de 
 * interfaces e classes abstratas, e não o contrário. Sendo assim para inverter a dependência é 
 * preciso criar uma interface que defina o comportamento esperado e depois implementar essa 
 * interface em classes concretas.
 */
class Curso implements Pontuavel, Assistivel
{
    private $nome;
    private $videos;
    private $feedbacks;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
        $this->videos = [];
        $this->feedbacks = [];
    }

    public function receberFeedback(Feedback $feedback): void
    {
        $this->feedbacks[] = $feedback;
    }

    public function adicionarVideo(Video $video)
    {
        if ($video->minutosDeDuracao() < 3) {
            throw new \DomainException('Video muito curto');
        }

        $this->videos[] = $video;
    }

    /** @return Video[] */
    public function recuperarVideos(): array
    {
        return $this->videos;
    }

    public function recuperarPontuacao(): int
    {
        return 100;
    }

    public function assistir(): void
    {
        foreach ($this->recuperarVideos() as $video) {
            $video->assistir();
        }
    }
}
