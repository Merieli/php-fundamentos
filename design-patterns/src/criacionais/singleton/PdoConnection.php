<?php

namespace Alura\DesignPattern\criacionais\singleton;

use PDO;

/**
 * Singleton é um design pattern que permite controlar a quantidade de instâncias de uma classe,
 * garantindo que ninguém possa criar uma instância da classe, mas que um método seja capaz de
 * controlar a necessidade de criação de uma nova instância. 
 * É um padrão para controlar instâncias e permitir criar apenas 1 instância de determinada classe,
 * enquanto ele provê o acesso global a essa instância.
 * 
 * Esse padrão é polêmico, porque controla o número de instâncias de um objeto que pode ferir
 * princípios como o de cada instância ser independente "não deve conhecer a outra", porque com o
 * construtor privado a classe não pode ser herdada e com isso dificulta testes de 
 * unidade/integração. Ele viola o Single Responsability Principle porque além de ele SER algo ele
 * CRIA algo.
 * 
 * Em PHP normalmente seu uso não é realmente necessário, porque como o ciclo de vida de uma 
 * aplicação PHP normalmente dura apenas uma requisição HTTP, é muito incomum tentarmos criar mais 
 * de uma conexão com o banco de dados.
 */
class PdoConnection extends PDO
{
    private static ?self $instance = null;
    
    private function __construct($dns, $username = null, $psswd = null, $options = null) 
    {
        parent::__construct($dns, $username, $psswd, $options);
    }

    public static function getInstance($dns, $username = null, $psswd = null, $options = null): self
    {
        if (is_null(self::$instance)) {
            // static instancia a própria classe atual
            self::$instance = new static($dns, $username, $psswd, $options);
        }

        return self::$instance;
    }
}
