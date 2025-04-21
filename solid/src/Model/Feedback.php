<?php

namespace Alura\Solid\Model;

/**
 * Principio ISP (Interface Segregation Principle) -> uma classe não pode ser forçada a depender de
 * métodos que não utilizará. Para isso, uma interface deverá ser extraída apenas com os métodos 
 * necessários.
 */
class Feedback
{
    private int $nota;
    private ?string $depoimento;

    public function __construct(int $nota, ?string $depoimento) {
        if ($nota < 9 && empty($depoimento)) {
            throw new \DomainException('Depoimento obrigatório');
        }

        $this->nota = $nota;
        $this->depoimento = $depoimento;
    }
}
