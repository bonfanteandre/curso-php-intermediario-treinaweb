<?php

$dados = [
    'tipo' => 'Email',
    'codigo' => '01',
    'descricao' => 'O remetente não foi informado'
];

echo 'Tipo: ' . $dados['tipo'] . 
     '. Código: ' . $dados['codigo'] . 
     '. Descrição: ' . $dados['descricao'] . '<br>';

$resultado = sprintf("Tipo: %s. Código: %s. Descrição: %s. <br>", $dados['tipo'], $dados['codigo'], $dados['descricao']);
echo $resultado;

printf("Tipo: %s. Código: %s. Descrição: %s. <br>", $dados['tipo'], $dados['codigo'], $dados['descricao']);

$resultado = vsprintf("Tipo: %s. Código: %s. Descrição: %s. <br>", $dados);
echo $resultado;