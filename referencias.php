<?php

$a = 5;
$b = 10;

var_dump($a);
echo '<br>';

var_dump($b);
echo '<br>';

$a = &$b;

var_dump($a);
echo '<br>';

var_dump($b);
echo '<br>';

function incrementar(&$valor) {
    $valor++;
    var_dump($valor);
    echo '<br>';
}

$x = 1;

var_dump($x);
echo '<br>';

incrementar($x);

var_dump($x);
echo '<br>';

$a = 1;
$b = &$a;

unset($b);

var_dump($a);
echo '<br>';