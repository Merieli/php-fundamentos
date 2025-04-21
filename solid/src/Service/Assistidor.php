<?php

namespace Alura\Solid\Service;

use Alura\Solid\Model\AluraMais;
use Alura\Solid\Model\Curso;
use Alura\Solid\Model\Pontuavel\Pontuavel;

/**
 * Encapsulamento -> é quanto temos um objeto que esconde seu comportamento e só está exposta as 
 * ações que são disponibilizados para o seu funcionamento. Ajuda no uso correto dos objetos, ao 
 * encapsular o acesso a determinados dados, liberando acesso apenas ao necessário, os objetos da 
 * nossa classe se tornam mais fáceis de serem utilizados.
 */
class Assistidor
{
    public function assistir(Pontuavel $conteudo)
    {
        $conteudo->assistir();
    }
}
