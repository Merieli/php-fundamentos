<?php

namespace Alura\DesignPattern\estruturais\bridge\relatorio;

interface ArquivoExportado
{
    public function salvar(ConteudoExportado $conteudoExportado): string;
}
