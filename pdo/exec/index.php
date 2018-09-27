<?php

try {
    
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=php_intermediario', 'andre', '123');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_PERSISTENT, true);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    // $quantidade = $pdo->exec("INSERT INTO funcionarios (nome) VALUES ('André')");
    $quantidade = $pdo->exec("UPDATE funcionarios SET nome = 'André Luis' WHERE id = 3");
    $quantidade = $pdo->exec("DELETE FROM funcionarios WHERE id = 4");

    echo 'Registros afetados: ' . $quantidade;

} catch (PDOException $ex) {
    echo $ex->getMessage();
}