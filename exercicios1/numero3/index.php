<?php

require_once __DIR__ . '/Autoloader/Autoloader.php';

use Dominio\Clientes\Cliente;
use Dominio\Banco\Agencia;
use Dominio\Banco\Contas\ContaCorrente;
use Dominio\Banco\Contas\ContaPoupanca;

$autoloader = new Autoloader();
$autoloader->registrar();

$agencia = new Agencia('123', 'Endereço da Agência');

$cliente = new Cliente('João', 'joão@gmail.com', 'Endereço do João');

$cc = new ContaCorrente('1', $agencia, $cliente, 100, 2);
$cc->creditar(1000);
$cc->debitar(99);
$cc->gerarExtrato();

$cp = new ContaPoupanca('1', $agencia, $cliente, 5);
$cp->creditar(1000);
$cp->debitar(500);
$cp->gerarExtrato();