<?php

//Filtrar array

$nomes = [
    '_Ana', 
    'Pedro',
    'Carla',
    'Fábio_'
];

$nomes_filtrados = preg_grep('#^_#', $nomes);
var_dump($nomes_filtrados);

preg_match('#../../....#', '11/11/1111', $match);
var_dump($match);

preg_match_all('#../../....#', '11/11/1111 22/22/2222', $match);
var_dump($match);

$texto = <<<TEXT
nome: Carlos
nascimento: 01/01/1990
cadastro: 10/10/2018
TEXT;

echo $texto;

preg_match_all('#(?P<chave>.+): (?P<valor>.+)#', $texto, $match, PREG_SET_ORDER);
var_dump($match);

$texto_novo = $match = preg_replace_callback('#(\d{2})/(\d{2})/(\d{4})#', function($match){
    var_dump($match);
    return "{$match[3]}-{$match[2]}-{$match[1]}";
}, $texto);

echo $texto_novo;