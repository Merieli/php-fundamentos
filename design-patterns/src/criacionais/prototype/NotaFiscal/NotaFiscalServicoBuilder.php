<?php

namespace Alura\DesignPattern\criacionais\prototype\NotaFiscal;

/**
 * Classe concreta do builder que tem a implementação de uma das partes, contendo apenas o método
 * específico desta.
 */
class NotaFiscalServicoBuilder extends NotaFiscalBuilder
{
    public function build(): NotaFiscal
    {
        $valorNotaFiscal = $this->notaFiscal->valor();
        $this->notaFiscal->valorImpostos = $valorNotaFiscal * 0.06;

        return $this->notaFiscal;
    }
}
