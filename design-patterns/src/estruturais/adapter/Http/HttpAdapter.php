<?php

namespace Alura\DesignPattern\estruturais\adapter\Http;

interface HttpAdapter
{
    public function post(string $url, array $data = []): void;
}
