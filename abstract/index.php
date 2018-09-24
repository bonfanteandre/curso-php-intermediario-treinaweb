<?php

error_reporting(E_ALL);
ini_set('display_errors', 'On');

require_once 'Ator.php';
require_once 'Jogador.php';
require_once 'Inimigo.php';

$jogador = new Jogador();
$jogador->atirar();

$inimigo = new Inimigo();
$inimigo->tomarDano();

var_dump($jogador, $inimigo);