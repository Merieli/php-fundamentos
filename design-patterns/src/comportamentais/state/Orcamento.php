<?php

namespace Alura\DesignPattern\comportamentais\state;

use Alura\DesignPattern\comportamentais\state\estadosOrcamento\EmAprovacao;
use Alura\DesignPattern\comportamentais\state\estadosOrcamento\EstadoOrcamento;

/**
 * Implementa o padrão State ao usar o EstadoOrcamento
 * 
 * Problemas:
 * - Métodos que só lançam exceção pode ser ruim, mas deixar o método vazio para ser implementado posteriormente é pior ainda porque pode gerar um problema invisível no código
 * - Métodos que só lançam exceções podem ser considerados por violar o princípio de substituição de Liskov, porque pode ser uma quebra de contrato - Ao menos que isto esteja no contrato
 * 
 */
class Orcamento
{
    public int $quantidadeItens;
    public float $valor;
    public EstadoOrcamento $estadoAtual;

    public function __construct() {
        $this->estadoAtual = new EmAprovacao();
    }

    public function aplicaDescontoExtra()
    {
        $this->valor -= $this->estadoAtual->calculaDescontoExtra($this);
    }

    public function aprova()
    {
        $this->estadoAtual->aprova($this);
    }

    public function reprova()
    {
        $this->estadoAtual->reprova($this);
    }

    public function finaliza()
    {
        $this->estadoAtual->finaliza($this);
    }
}
