<?php

use Alura\DesignPattern\estruturais\decorators\CalculadoraDeImpostos;
use Alura\DesignPattern\estruturais\decorators\Icms;
use Alura\DesignPattern\estruturais\decorators\Iss;
use Alura\DesignPattern\Orcamento;


require __DIR__ . '/../../../vendor/autoload.php';

$calculadora = new CalculadoraDeImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

/**
 * O padrão decorator permite a adição de funcionalidades em classes em tempo de execução do software
 * 
 * Da forma como foi aplicado um imposto aqui pode acabar sendo decorado com outro, ou seja, ter
 * a funcionalidade de um determinado imposto adicionada a outro imposto.
 */
echo $calculadora->calcula($orcamento, new Icms(new Iss()));
