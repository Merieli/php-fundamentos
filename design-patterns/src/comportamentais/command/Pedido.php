<?php

namespace Alura\DesignPattern\comportamentais\command;

use Alura\DesignPattern\state\Orcamento;
use DateTimeInterface;

class Pedido
{
    public string $nomeCliente;
    public DateTimeInterface $dataFinalizacao;
    public Orcamento $orcamento;
}
