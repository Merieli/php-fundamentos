<?php


use Alura\DesignPattern\comportamentais\strategy\CalculadoraDeImpostos;
use Alura\DesignPattern\comportamentais\strategy\ChainOfResponsibility\CalculadoraDeDescontos;
use Alura\DesignPattern\comportamentais\strategy\Impostos\Icms;
use Alura\DesignPattern\Orcamento;

require 'vendor/autoload.php';

// $calculadora = new CalculadoraDeImpostos();

// $orcamento = new Orcamento();
// $orcamento->valor = 100;

// echo $calculadora->calcula($orcamento, new Icms());

$calculadora = new CalculadoraDeDescontos();

$orcamento = new Orcamento();
$orcamento->valor = 600;
$orcamento->quantidadeItens = 5;

echo $calculadora->calculaDescontos($orcamento);