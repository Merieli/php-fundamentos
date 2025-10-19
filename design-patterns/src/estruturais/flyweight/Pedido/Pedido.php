<?php

namespace Alura\DesignPattern\estruturais\flyweight\pedido;

use Alura\DesignPattern\comportamentais\state\Orcamento;

/**
 * Existem dados que são intrínsecos "realmente pertecem" a um objeto, e outros que apesar de serem
 * importantes são extrínsecos "podem ser compartilhados por vários outros e não são únicos".
 * 
 * Quando extraimos dados extrínsecos de uma classe para outra temos parte do padrão Flyweight.
 * 
 * O padrão flyweight otimiza fazendo com quem mais objetos possam caber na memória RAM através da
 * separação de partes que são mutáveis "dependendo das instâncias" das partes imutáveis que podem 
 * ser compartilhadas por todas instâncias. Existe outra parte desse padrão que é o flyweight 
 * factory, que nada mais é do que a construção de uma fábrica de objetos otimizados, responsável
 * por verificar se existe em cache o objeto que tenha sido criado com um estado esperado e se
 * existir retorna o mesmo, sem precisar criá-lo, mas caso não tenha sido criado, ela cria, guarda
 * no cache e retorna. 
 * 
 * Nesse padrão os objetos compartilhados devem ser imutáveis e ter nomes semânticos que remeta ao
 * negócio, mas ao usar esse padrão há uma tendência de usar nomes ruins, quando não se tem um nome
 * melhor para ser usado no lugar.
 * 
 * !Atenção: Só usar esse padrão quando o objetivo for poupar muita memória, quando se tem milhões
 * de objetos sendo tratados todo na memória e o custo precisa ser otimizado. Caso contrário não
 * fará sentido.
 */
class Pedido
{
    public TemplatePedido $template;
    public Orcamento $orcamento;
}
