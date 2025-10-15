<?php

namespace Alura\DesignPattern\estruturais\facades;

use Alura\DesignPattern\comportamentais\ChainOfResponsibility\descontos\DescontoMaisDe500Reais;
use Alura\DesignPattern\comportamentais\ChainOfResponsibility\descontos\DescontoMaisDe5Itens;
use Alura\DesignPattern\comportamentais\ChainOfResponsibility\descontos\SemDesconto;
use Alura\DesignPattern\Orcamento;

/**
 * Essa classe `CalculadoraDeDescontos` é uma fachada "facade" para um sistema muito maior. Um
 * método simples `calculaDescontos` é responsável por montar uma cadeia de descontos, calcular
 * e logar o desconto. 
 * 
 * Com a facade se tem uma interface amigável para um sistema muito mais complexo com muita coisa
 * que pode acontecer por trás.
 */
class CalculadoraDeDescontos
{
    public function calculaDescontos(Orcamento $orcamento): float
    {
        $cadeiaDeDescontos = new DescontoMaisDe5Itens(
            new DescontoMaisDe500Reais(
                new SemDesconto()
            )
        );

        $descontoCalculado = $cadeiaDeDescontos->calculaDesconto($orcamento);

        $logDesconto = new LogDesconto();
        $logDesconto->informar($descontoCalculado);

        return $descontoCalculado;
    }
}
