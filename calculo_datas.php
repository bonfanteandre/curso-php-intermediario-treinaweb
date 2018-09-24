<?php

$hoje = new DateTime('2018-09-24');
$inicioAno = new DateTime('2018-01-01');

$diferenca = $hoje->diff($inicioAno);

var_dump($diferenca);

echo vprintf("%d anos %d meses e %d dias de diferença <br>", [$diferenca->y, $diferenca->m, $diferenca->d]);


$semanaPassada = new DateTime();
$semanaPassada->setTimestamp(strtotime('-7 days'));

$agora = new DateTime();
$agora->setTimestamp(strtotime('now'));

$diferenca = $agora->diff($semanaPassada);

var_dump($semanaPassada, $agora, $diferenca);