<?php

$mensagem =  'Olá, Mundo!';

//use = "Importa" a variavel mensagem para o escopo da funcao
$closure = function() use ($mensagem) {
    echo $mensagem . '<br>';

    //Não altera variavel original, só se argumento tiver & altera
    $mensagem = 'Adeus, Mundo!';
    echo $mensagem . '<br>';
};

$closure();
echo $mensagem . '<br>';

$add = function($valor) {
    return function($outroValor) use ($valor) {
        return $outroValor + $valor;
    };
};

$numero = $add(2);
echo $numero(5);