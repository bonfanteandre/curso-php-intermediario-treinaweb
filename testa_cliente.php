<?php

require_once 'classes/Cliente.php';

$cliente = new Cliente;
$cliente->nome = 'João';
$cliente->setEmail('joao@gmail.com');

var_dump($cliente);