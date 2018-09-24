<?php

//nowdoc, nao processa variaveis
$dados = <<<'HTML'
TreinaWeb Cursos, o interpretador não entenderá $isso como sendo uma variável.
<br /><br />
<b>Teste HTML</b>
<br>
HTML;

echo $dados;

$titulo = 'Título da página';
$conteudo = 'Este é o conteúdo da página';

//heredoc, processa variaveis
$dados = <<<HTML
<h1>$titulo</h1>
<p>$conteudo</p>
HTML;

echo $dados;