<?php

function removerItem(&$array, $chave) {
    if (isset($array[$chave])) {
        unset($array[$chave]);
    }
}

$array = [1, 2, 3, 4, 5];

var_dump($array);

removerItem($array, 0);

var_dump($array);