<?php

use Alura\DesignPattern\criacionais\singleton\PdoConnection;

require __DIR__ . '/../../../vendor/autoload.php';

$pdo = PdoConnection::getInstance('sqlite::memory:');
// $pdo->query('');

$pdo2 = PdoConnection::getInstance('sqlite::memory:');
// $pdo2->query('');

var_dump($pdo, $pdo2);