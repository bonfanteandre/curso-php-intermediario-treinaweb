<?php

require_once 'classes/Carro.php';

$i30 = new Carro();
$i30->marca = 'Hyundai';
$i30->modelo = 'i30';

$palio = new Carro();
$palio->marca = 'Fiat';
$palio->modelo = 'Palio';

$gol = new Carro();
$gol->marca = 'Volkswagen';
$gol->modelo = 'Gol';
$gol->quantidadePortas = 4;
$gol->cor = 'branco';
$gol->ano = 2015;

var_dump($i30, $palio, $gol);