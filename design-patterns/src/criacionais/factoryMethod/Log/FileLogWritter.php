<?php

namespace Alura\DesignPattern\criacionais\factoryMethod\Log;

class FileLogWritter implements LogWritter
{
    private $arquivo;

    public function __construct(string $caminhoArquivo) 
    {
        $this->arquivo = fopen($caminhoArquivo, 'a+');
    }

    public function log(string $mensagemFormatada): void
    {
        fwrite($this->arquivo, $mensagemFormatada . PHP_EOL);
    }

    // Destrutor de classe, para fechar o arquivo
    public function __destruct()
    {
        fclose($this->arquivo);
    }
}
