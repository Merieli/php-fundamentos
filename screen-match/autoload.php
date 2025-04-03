<?php

// Para "ensinar" o php a importar um namespace:
spl_autoload_register(function (string $className) {
    $path = str_replace('ScreenMatch', '/src', $className) . '.php';
    // A contrabarra `\` é o separador de pastas no windows, por isso no linux não funciona, e é preciso efetuar o replace abaixo que substitui a contrabarra pela constante que equivale ao separador correto de cada Sistema Operacional:
    $path = str_replace('\\',DIRECTORY_SEPARATOR, $path);

    $fullpath = __DIR__ . DIRECTORY_SEPARATOR . $path;

    // Só executa o require se o arquivo existir, evitando erro no autoload
    if (file_exists($fullpath)) {
        require_once $fullpath;
    }
});
