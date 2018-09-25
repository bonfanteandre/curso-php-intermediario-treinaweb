<?php

$dsn = 'mysql:host=localhost;port=3306;dbname=php_intermediario;charset=utf8';
$usuario = 'andre';
$senha = '123';
$opcoes = [
    PDO::ATTR_PERSISTENT => true
];

try {
    
    $pdo = new PDO($dsn, $usuario, $senha, $opcoes);
    $funcionarios = $pdo->query('SELECT * FROM funcionarios');
    
} catch (Exception $ex) {
    var_dump($ex);
}

?>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Nome</td>
    </tr>
    <?php while($funcionario = $funcionarios->fetchObject()): ?>
        <tr>
            <td><?=$funcionario->id?></td>
            <td><?=$funcionario->nome?></td>
        </tr>
    <?php endwhile; ?>
</table>
