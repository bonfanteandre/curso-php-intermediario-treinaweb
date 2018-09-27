<?php

require_once 'Db.php';

$db = new Db('mysql', 'localhost', 'php_intermediario', 'andre', '123');

$db->insert('funcionarios', ['nome' => 'Renata']);
$db->insert('funcionarios', ['nome' => 'Renato']);

echo "linhas afetadas: " . $db->update('funcionarios', ['nome' => 'Bonfante'], 'id=8');

$db->delete('funcionarios', 'id=6');

$funcionarios = $db->select('SELECT * FROM funcionarios');

var_dump($funcionarios);