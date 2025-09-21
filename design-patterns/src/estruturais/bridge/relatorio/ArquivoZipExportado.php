<?php

namespace Alura\DesignPattern\estruturais\bridge\relatorio;

use ZipArchive;

class ArquivoZipExportado implements ArquivoExportado
{   
    private string $nomeArquivoInterno;

    public function __construct(string $nomeArquivoInterno) {
        $this->nomeArquivoInterno = $nomeArquivoInterno;
    }

    public function salvar(ConteudoExportado $conteudoExportado): string
    {
        $caminhoArquivo = tempnam(sys_get_temp_dir(), 'zip_');
        $arquivoZip = new ZipArchive();
        $arquivoZip->open($caminhoArquivo);
        $arquivoZip->addFromString(
            $this->nomeArquivoInterno, 
            serialize($conteudoExportado->conteudo())
        );
        $arquivoZip->close();

        return $caminhoArquivo;
    }
}
