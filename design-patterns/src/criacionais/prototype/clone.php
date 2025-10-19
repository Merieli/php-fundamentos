<?php

use Alura\DesignPattern\criacionais\prototype\NotaFiscal\NotaFiscalServicoBuilder;
use Alura\DesignPattern\estruturais\composite\ItemOrcamento;

require __DIR__ . '/../../../vendor/autoload.php';


$builder = new NotaFiscalServicoBuilder();
$item1 = new ItemOrcamento();
$item1->valor = 100;
$item2 = new ItemOrcamento();
$item2->valor = 1500;
$item3 = new ItemOrcamento();
$item3->valor = 1000;
$item4 = new ItemOrcamento();
$item4->valor = 400;

$notaFiscal = $builder->paraEmpresa('12334345.', 'Merieli Manzano Tech')
    ->comItem($item1)
    ->comItem($item2)
    ->comItem($item3)
    ->comItem($item4)
    ->comObservacoes('Esta nota fiscal foi construída com um construtor')
    ->build();

$itemNota2 = new ItemOrcamento();
$itemNota2->valor = 200;

/**
 * Essa forma de copiar um objeto é um design pattern chamado Prototype, que também é conhecido 
 * como "Clone". Ele permite copiar um objeto existente sem fazer com que o código seja dependente
 * da classe em si, ou seja, não é necessário copiar propriedade por propriedade com alta 
 * dependência.
 */
$notaFiscal2 = clone $notaFiscal; 
$notaFiscal2->itens[] = $itemNota2;

var_dump($notaFiscal, $notaFiscal2);
