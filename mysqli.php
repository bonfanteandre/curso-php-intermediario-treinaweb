<?php

$con = new mysqli('localhost', 'andre', '123', 'php_intermediario');

if ($con->connect_errno) {
    exit(utf8_encode($con->connect_error));
}

$resultado = $con->query('SELECT * FROM funcionarios');
if ($con->errno) {
    exit(utf8_encode($con->error));
}

$funcionarios = $resultado->fetch_all();
var_dump($funcionarios);

// while($funcionario = $resultado->fetch_object()) {
//     echo $funcionario->id . ' - ' . $funcionario->nome . '<br>';
// }