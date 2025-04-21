<?php

namespace Alura\Solid\Model;

/**
 * Esta é uma classe coesa que representa um vídeo.
 * Coesão -> quando a classe faz apenas o que faz sentido para ela e não mais do que isso.
 * Uma classe coesa tem apenas uma responsabilidade, ou seja, ela não deve fazer mais do que uma coisa, que nesse caso é representar um vídeo.
 */
class Video
{
    /** @var bool */
    protected $assistido = false;
    /** @var string */
    protected $nome;
    /** @var \DateInterval */
    protected $duracao;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
        $this->assistido = false;
        $this->duracao = \DateInterval::createFromDateString('0');
    }

    public function assistir(): void
    {
        $this->assistido = true;
    }

    public function minutosDeDuracao(): int
    {
        return $this->duracao->i;
    }

    public function recuperarUrl(): string
    {
        return 'http://videos.alura.com.br/' . http_build_query(['nome' => $this->nome]);
    }
}
