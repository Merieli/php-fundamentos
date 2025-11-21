# Array


## Alocação de memória:

Quando tento inserir um valor no array ele aloca espaço de memoria para esse item, o que é algo custoso para o computador. O php pra otimizar aloca sempre o elemento elevado a potência de 2, ou seja, se tenho 1 item ele aloca memória para 2 elementos, se tenho 2 itens, ele já tem a memória suficiente, mas se vou adicionar o terceiro ele aloca memória para 2^2, ou seja, 4 itens, e assim por diante. Sendo assim ao tentar alocar muitos valores o gap de memória alocada pode ser muito grande.

