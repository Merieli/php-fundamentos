<?php

namespace Alura\DesignPattern;

/**
 * Essa é uma classe de serviço que representa uma funcionalidade no sistema
 */
class CalculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento, string $nomeImposto): float
    {
        switch ($nomeImposto) {
            case "ICMS":
                return $orcamento->valor * 0.1;
            case "ISS":
                return $orcamento->valor * 0.06;
            default:
                return $orcamento->valor;
        }
    }
}
