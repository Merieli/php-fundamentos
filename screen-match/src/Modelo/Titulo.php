<?php

// Namespace - é uma forma de dizer que um arquivo faz parte de um pacote ou pasta ou grupo virtua de um determinado nome, fazendo com que o mesmo seja organizado lógicamente e não fisicamente.
// É uma boa prática mapeá-lo com os mesmos nomes da estrutura de pastas
namespace ScreenMatch\Modelo;

abstract class Titulo implements Avaliavel
{
    use ComAvaliacao;

    public function __construct(
        public readonly string $nome,
        public readonly int $anoLancamento,
        public readonly Genero $genero,
    ) {
    }

    // Método abstrato que deve ser implementado pelas classes filhas
    abstract public function duracaoEmMinutos(): int;
}