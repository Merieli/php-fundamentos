<?php

use Alura\DesignPattern\criacionais\builder\NotaFiscal\{NotaFiscalServicoBuilder, NotaFiscalProdutoBuilder};
use Alura\DesignPattern\estruturais\composite\ItemOrcamento;

require __DIR__ . '/../../../vendor/autoload.php';

$builder = new NotaFiscalProdutoBuilder();
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

echo $notaFiscal->valorImpostos;
