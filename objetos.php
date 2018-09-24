<?php

$obj = new stdClass;
$obj->valor1 = 'Um valor qualquer';
$obj->valor2 = 'Outro valor';

var_dump($obj);

$array = [
    'nome' => 'João', 
    'idade' => '20', 
    'altura' => 1.83
];

$obj2 = (object) $array;

var_dump($obj2);

foreach($obj2 as $key => $value) {
    echo "$key : $value <br>";
}