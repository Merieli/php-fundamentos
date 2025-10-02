<?php

require __DIR__ . '/../../../vendor/autoload.php';

use Alura\DesignPattern\comportamentais\command\Pedido;
use Alura\DesignPattern\comportamentais\state\Orcamento;
use Alura\DesignPattern\estruturais\bridge\relatorio\ArquivoXmlExportado;
use Alura\DesignPattern\estruturais\bridge\relatorio\ArquivoZipExportado;
use Alura\DesignPattern\estruturais\bridge\relatorio\OrcamentoExportado;
use Alura\DesignPattern\estruturais\bridge\relatorio\PedidoExportado;

/**
 * Assim se tem uma ponte entre o conteúdo de um arquivo e o formato de um arquivo
 * Dessa forma é possível criar uma nota exportada, um json exportado e outros elementos apenas
 * criando a classe que implementa as interfaces.
 */
$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 7;

/**
 * O bridge é um padrão que tem a intenção de desacoplar uma abstraçõa da sua implementação, de 
 * modo que as duas possam variar e evoluir independentemente.
 * Abstração - código de alto nível que geralmente delega ações para outro objeto.
 * Implementação - é o código que realmente faz o trabalho.
 * O problema que leva ao bridge começa quando a Abstração e a implementação crescem juntas.
 */

/** Esse é o conteudo exportado */
$orcamentoExportado = new OrcamentoExportado($orcamento);
/** Esta é a ponte entre o conteúdo exportado e a implementação de um arquivo exportado */
$pedidoExportadoZip = new ArquivoZipExportado('orcamento.array');

echo $pedidoExportadoZip ->salvar($orcamentoExportado) . PHP_EOL;


$pedido = new Pedido();
$pedido->nomeCliente = 'Merieli Manzano';
$pedido->dataFinalizacao = new DateTimeImmutable();

$pedidoExportado = new PedidoExportado($pedido);
$pedidoExportadoXml = new ArquivoXmlExportado('pedido.array');

echo $pedidoExportadoXml->salvar($pedidoExportado) . PHP_EOL;
