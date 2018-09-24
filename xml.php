<?php

$alunos = [
    [
        'id' => 1,
        'nome' => 'João',
        'cidade' => 'São Paulo'
    ],
    [
        'id' => 2,
        'nome' => 'Maria',
        'cidade' => 'Porto Alegre'
    ],
    [
        'id' => 3,
        'nome' => 'José',
        'cidade' => 'Curitiba'
    ]
];

//Cria o XML e o primeiro elemento
$domDocument = new DOMDocument('1.0', 'utf-8');
$tagAlunos = $domDocument->createElement('alunos');

foreach($alunos as $aluno) {

    //Convert o array para um objeto
    settype($aluno, 'object');
    
    //Cria um elemento para o aluno com o atributo id
    $tagAluno = $domDocument->createElement('aluno');
    $tagAluno->setAttribute('id', $aluno->id);
    
    //Cria o elemento do nome e insere no elemento do aluno
    $tagNome = $domDocument->createElement('nome', $aluno->nome);
    $tagAluno->appendChild($tagNome);
    
    //Cria o elemento da cidade e insere no elemento do aluno
    $tagCidade = $domDocument->createElement('cidade', $aluno->cidade);
    $tagAluno->appendChild($tagCidade);

    //Insere o elemento do aluno no elemento de alunos
    $tagAlunos->appendChild($tagAluno);
}

//Adiciona a lista de alunos
$domDocument->appendChild($tagAlunos);

$domDocument->formatOutput = true;
$domDocument->save('alunos.xml');
echo $domDocument->saveXML();