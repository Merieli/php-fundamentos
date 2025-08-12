<?php

namespace Alura\DesignPattern\comportamentais\strategy;

use Alura\DesignPattern\comportamentais\strategy\Impostos\Imposto;
use Alura\DesignPattern\Orcamento;


/**
 * Essa é uma classe de serviço que representa uma funcionalidade no sistema
 * 
 * Ela aplica o pattern Strategy com a interface Imposto.
 * Esse padrão funciona aqui porque a estratégia a ser usado é definida no método da classe.
 */
class CalculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento, Imposto $imposto): float
    {
        return $imposto->calculaImposto($orcamento);
    }
}
