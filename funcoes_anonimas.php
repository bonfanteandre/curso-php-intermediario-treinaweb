<?php

function filtrarArray($valor) {
    return ($valor > 8);
}

$valores = [6, 7, 8, 9, 10, 3, 2, 11, 12];

$novosValores = array_filter($valores, 'filtrarArray');
var_dump($novosValores);

//Reescrevendo
$novosValores = array_filter($valores, function($valor) {
    return $valor > 8;
});

var_dump($novosValores);


$entrada = [1, 2, 3, 4, 5, 6, 7, 8, 9];
array_walk($entrada, function(&$e){
    $e *= 10;
});

print_r($entrada);