<?php

use Alura\DesignPattern\comportamentais\state\Orcamento;
use Alura\DesignPattern\estruturais\adapter\Http\ReactPHPHttpAdapter;
use Alura\DesignPattern\estruturais\adapter\RegistroDeOrcamento;

require '../../vendor/autoload.php';

$registroOrcamento = new RegistroDeOrcamento(new ReactPHPHttpAdapter());
$registroOrcamento->registrar(new Orcamento());
