<?php

namespace Alura\DesignPattern\estruturais\proxy;

use Alura\DesignPattern\estruturais\composite\Orcamento;
use Alura\DesignPattern\estruturais\composite\Orcavel;
use DomainException;

/**
 * O pattern proxy controla o acesso a um objeto original, com ele se tem um substituto que contém
 * o objeto original, por isso é possível realizar uma ação antes ou depois de obter o objeto
 * original.
 */
class CacheOrcamentoProxy extends Orcamento
{
    private float $valorCache = 0;
    private Orcamento $orcamento;

    public function __construct(Orcamento $orcamento) {
        $this->orcamento = $orcamento;
    }

    public function valor(): float  
    {
        if ($this->valorCache == 0) {
            $this->valorCache= $this->orcamento->valor();
        }

        return parent::valor();
    }
    
    public function addItem(Orcavel $item): void
    {
        throw new DomainException('Não é possível adicionar item a orçamento cacheado');
    }
}
