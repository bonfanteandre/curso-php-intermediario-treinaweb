<?php

$var = 'nome';
$$var = 'PHP Intermediário';

echo $nome . '<br>';

$array = [
    'nome' => 'João',
    'idade' => 20,
    'pais' => 'Brasil'
];

foreach($array as $chave => $valor) {
    $$chave = $valor;
}

echo $nome . '<br>';
echo $idade . '<br>';
echo $pais . '<br>';