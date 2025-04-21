# Regras

1. Não usar getter e setters "ou seja não devemos expor a visibilidade externa da API através de getters e setters" - Evite usar setters sempre que possível. Dessa forma você terá objetos imutáveis, ou seja, que não sofrem alteração. Esta técnica ajuda bastante na previsibilidade de seu código.
   1.1. Tell, Don't Ask - é sobre não expor detalhes de implementação internos, mas sim as funcionalidades, assim garantimos o encapsulamento
   > Utilizar métodos de acesso a nossas propriedades faz sentido, desde que nós não utilizemos o retorno para tomar decisões que poderiam estar encapsuladas na classe.
2. Ter apenas 1 nível de indentação por método
3. Nunca use ELSE
4. Envolva seus tipos primitivos "a regra diz que tudo deve ser envolvido, porém é recomendável ter parcimonia e envolver apenas caso o tipo primitivo tenha algum comportamento"
5. Coleções de primeira classe - se tenho alguma "estrutura de dados"/"coleção" a única propriedade da classe deve ser essa coleção, para que todos os métodos estejam envolvidos nessa propriedade e com o propósito de manipulá-la
6. Apenas 1 "ponto" por linha - esse ponto significa operador de acesso, e no PHP ele é representado por `->`. Por "linha" na verdade quer dizer que é por instrução
7. NUNCA abrevie os nomes
8. Mantenha suas classes e pacotes pequenos - isso quer dizer que as classes segundo a recomendação deveria ter o máximo de 50 linhas e pacotes o máximo de 10 classes, porém o foco é manter pequeno para que fique fácil de ler, mas não tão estritamente limitado ao número de linhas.
9. Tenha no máximo 2 propriedades por classe - essa regra pode ser irreal para o dia a dia, mas é legal exercitar para chegar em algo perto disto


Object Calisthenics - são exercícios de programação, formalizados como um grupo de 9 regras inventadas por Jeff Bay no livro The ThoughtWorks Anthology.
