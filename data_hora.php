<?php

$dataHora = new DateTime('now');
echo 'Agora: ' . $dataHora->format('d/m/Y h:i:s') . '<br>';

$aniversario = new DateTime('1997-06-10 01:05:00');
echo 'Meu aniversário: ' . $aniversario->format('d/m/Y h:i:s') . '<br>';

$amanha = new DateTime('+1 day');
$maisUmMes = new DateTime('+1 month');

var_dump($amanha, $maisUmMes);