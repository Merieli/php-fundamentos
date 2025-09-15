<?php

namespace Alura\DesignPattern\comportamentais\iterator;

use Alura\DesignPattern\comportamentais\state\estadosOrcamento\Finalizado;
use Alura\DesignPattern\comportamentais\state\Orcamento;
use ArrayIterator;
use Iterator;
use IteratorAggregate;

/**
 * Essa é uma classe de Collection que permite tipar os elementos de um array
 */
class ListaDeOrcamentos implements IteratorAggregate
{
    /** @var Orcamento[] */
    private array $orcamentos;

    public function __construct() {
        $this->orcamentos= [];
    }

    public function addOrcamento(Orcamento $orcamento)
    {
        $this->orcamentos[] = $orcamento;
    }

    /**
     * Com o iterator a lista de elementos só poderá ser acessada através de um loop
     * sem expor o array. Dessa forma a classe ListaDeOrcamentos se torna percorrível
     * que é um objeto denominado Iterator, que é uma representação de algo que pode
     * ser percorrido, sem saber como é a implementação interna.
     */
    public function getIterator(): Iterator
    {
        return new ArrayIterator($this->orcamentos);
    }

    public function orcamentosFinalizados(): array
    {
        return array_filter(
            $this->orcamentos,
            fn (Orcamento $orcamento) => $orcamento->estadoAtual instanceof Finalizado
        );
    }
}

