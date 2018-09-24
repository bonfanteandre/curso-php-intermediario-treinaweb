<?php

error_reporting(E_ALL);

require_once 'classes/Livro.php';

$l1 = new Livro;
$l1->codigo = 1;
$l1->nome = 'O Silmarilion';
$l1->autor = 'J.R.R Tolkien';
$l1->valor = 49.99;

$l1->cadastrar();
$l1->mostrar();

var_dump($l1);