<?php

use Alura\DesignPattern\estruturais\composite\ItemOrcamento;
use Alura\DesignPattern\estruturais\composite\Orcamento;

require __DIR__ . '/../../../vendor/autoload.php';

/**
 * O padrão aplicado aqui é o Composite, ou Object Tree "Árvore de objetos", que tem como intenção
 * representar uma árvore de objetos, que permite acessar a folha e o galho da mesma forma.
 * 
 * Permite compor objetos e acessá-los na estrutura de árvore.
 */
$orcamento = new Orcamento();
$item1 = new ItemOrcamento();
$item1->valor = 300;
$item2 = new ItemOrcamento();
$item2->valor = 500;

$orcamento->addItem($item1);
$orcamento->addItem($item2);

$orcamentoAntigo = new Orcamento();
$item3 = new ItemOrcamento();
$item3->valor = 150;
$orcamentoAntigo->addItem($item3);

$orcamentoMaisAntigoAinda = new Orcamento();
$item4 = new ItemOrcamento();
$item4->valor = 50;
$item5 = new ItemOrcamento();
$item5->valor = 100;
$orcamentoMaisAntigoAinda->addItem($item4);
$orcamentoMaisAntigoAinda->addItem($item5);

$orcamentoAntigo->addItem($orcamentoMaisAntigoAinda);
$orcamento->addItem($orcamentoAntigo);

echo $orcamento->valor();