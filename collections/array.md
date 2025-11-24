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


## Alocação de memória:

Quando tento inserir um valor no array ele aloca espaço de memoria para esse item, o que é algo custoso para o computador. O php pra otimizar aloca sempre o elemento elevado a potência de 2, ou seja, se tenho 1 item ele aloca memória para 2 elementos, se tenho 2 itens, ele já tem a memória suficiente, mas se vou adicionar o terceiro ele aloca memória para 2^2, ou seja, 4 itens, e assim por diante. Sendo assim ao tentar alocar muitos valores o gap de memória alocada pode ser muito grande.


## SplHeap

É uma forma de implementar uma estrutura de árvore, onde a ordem deles importam, e essa classe é abstrata, ou seja, é necessário estender ela para implementar a lógica de comparação entre os elementos.

