<?php

use Alura\DesignPattern\criacionais\factoryMethod\Log\{StdoutLogManager, FileLogManager};

require __DIR__ . '/../../../vendor/autoload.php';

$logManager = new FileLogManager(__DIR__ . '/log.txt');
$logManager->log('info', 'Testando log manager');