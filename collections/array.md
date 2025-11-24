# Array

Arrays nada mais são do que mapas (ou dicionários) implementados de forma nativa na linguagem PHP. Eles permitem mapear chaves para valores, onde as chaves podem ser strings ou inteiros.

Permite mapear uma chave para um valor, mas com uma limitação, uma chave precisa ser uma string ou um inteiro. Caso tente usar outro tipo de dado como chave, o PHP irá convertê-lo para string ou inteiro.

Como saídas para essa limitação:
- É possível criar um hash que mapeia um objeto para um valor, usando a função spl_object_hash.
- Outra alternativa é usar a estrutura SplObjectStorage, que permite mapear objetos para valores diretamente. Ele por baixo dos panos usa o spl_object_hash para fazer o mapeamento e garante a unicidade dos objetos.

Sendo assim podemos adaptar a estratégia de acordo com a nossa necessidade, como:
- Se precisar mapear strings ou inteiros para valores, use arrays.
- Se precisar mapear objetos para valores, use SplObjectStorage ou spl_object_hash.


## SplObjectStorage

No php as chaves do SplObjectStorage são uma coleção então é possível iterar sobre elas.

O principal problema dessa estrutura é que cada objeto é armazenado em memória e se torna único "mesmo que sejam repetidos", porque não permite que informemos como comparar objetos, porque ela usa o hash como chave.

## SplFixedArray

É uma implementação de array com tamanho fixo, ou seja, ao criar um SplFixedArray você precisa informar o tamanho que ele terá e esse tamanho não pode ser alterado posteriormente. Isso pode ser útil quando você sabe de antemão quantos elementos irá armazenar, pois pode economizar memória e melhorar o desempenho em comparação com arrays dinâmicos.



## Alocação de memória:

Quando tento inserir um valor no array ele aloca espaço de memoria para esse item, o que é algo custoso para o computador. O php pra otimizar aloca sempre o elemento elevado a potência de 2, ou seja, se tenho 1 item ele aloca memória para 2 elementos, se tenho 2 itens, ele já tem a memória suficiente, mas se vou adicionar o terceiro ele aloca memória para 2^2, ou seja, 4 itens, e assim por diante. Sendo assim ao tentar alocar muitos valores o gap de memória alocada pode ser muito grande.


## SplHeap

É uma forma de implementar uma estrutura de árvore, onde a ordem deles importam, e essa classe é abstrata, ou seja, é necessário estender ela para implementar a lógica de comparação entre os elementos.


## Extensão DS

É uma extensão que adiciona várias estruturas de dados ao PHP, incluindo vetores, listas ligadas, pilhas, filas, mapas e conjuntos. Essas estruturas são implementadas em C e são otimizadas para desempenho e uso de memória.

Para usar a extensão DS, é necessário instalá-la primeiro. Isso pode ser feito usando o gerenciador de pacotes PECL com o seguinte comando:

```bash
pecl install ds
```

Depois é necessário habilitá-la no arquivo de configuração do PHP (php.ini) adicionando a linha:

```ini
extension=ds.so
```

Após a instalação e habilitação, você pode usar as estruturas de dados fornecidas pela extensão DS em seu código PHP. Aqui estão alguns exemplos de como usar algumas das estruturas de dados mais comuns:

```php
use Ds\Vector;
use Ds\Map;
use Ds\Set;

// Vetor
$vector = new Vector();
$vector->push(1);
$vector->push(2);
$vector->push(3);
echo $vector->get(1); // Saída: 2

// Mapa
$map = new Map();
$map->set('chave1', 'valor1');
$map->set('chave2', 'valor2');
echo $map->get('chave1'); // Saída: valor1

// Conjunto
$set = new Set();
$set->add(1);
$set->add(2);
$set->add(3);
echo $set->has(2); // Saída: true
```

Usando a DS temos a interface Collection que é implementada por várias estruturas de dados, como Vector, Map, Set, etc. Essa interface fornece métodos comuns para manipular coleções de dados, como adicionar, remover e verificar a existência de elementos.


### Vector

Um vextor é uma estrutura de dados que armazena uma coleção ordenada de elementos. Ele permite acesso rápido aos elementos por índice e é dinâmico, ou seja, pode crescer ou diminuir conforme necessário.

