<?php

namespace Alura\DesignPattern\estruturais\flyweight\Pedido;

use Alura\DesignPattern\comportamentais\state\Orcamento;
use DateTimeImmutable;

/**
 * Este é um Flyweight Factory que permite reutilizar templates entre pedidos, sem criar um novo
 * template para cada "desnecessariamente".
 */
class CriadorDePedido
{
    private array $templates = [];

    /**
     * Verifica se o template já foi salvo em cache e caso ainda não tenha salvado é criado um
     * novo template para retornar.
     */
    public function gerarTemplatePedido(string $nomeCliente, string $dataFormatada): TemplatePedido
    {
        // String única para cada um dos templates usada como chave única:
        $hash = md5($nomeCliente . $dataFormatada);
        if (!array_key_exists($hash, $this->templates)) {
            $template = new TemplatePedido(
                $nomeCliente, 
                new DateTimeImmutable($dataFormatada)
            );

            $this->templates[$hash] = $template;
        }

        return $this->templates[$hash];
    }
    
    public function criaPedido(
        string $nomeCliente, 
        string $dataFormatada, 
        Orcamento $orcamento
    ): Pedido
    {
        $template = $this->gerarTemplatePedido($nomeCliente, $dataFormatada);
        var_dump($template);
        $pedido = new Pedido();
        $pedido->template = $template;
        $pedido->orcamento = $orcamento;

        return $pedido;
    }
}
