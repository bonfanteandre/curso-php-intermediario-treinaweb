<?php

$nome = 'João';

$dados = [
    'nome' => 'TreinaWeb',
    'email' => 'treinaweb@treinaweb.com.br',
    'telefone' => '99-9999-9999',
    'site' => 'http://www.treinaweb.com.br'
];

//extract($dados, EXTR_SKIP);
extract($dados, EXTR_PREFIX_ALL, 'dados');

echo $dados_nome . '<br>';
echo $dados_email . '<br>';
echo $dados_telefone . '<br>';
echo $dados_site . '<br>';