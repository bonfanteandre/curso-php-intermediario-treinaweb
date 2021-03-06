<?php

try {
    
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=php_intermediario', 'andre', '123');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_PERSISTENT, true);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    
    var_dump($pdo);

    $stmt = $pdo->query('SELECT * FROM funcionarios');
    $funcionarios = $stmt->fetchAll();

    var_dump($funcionarios);

} catch (PDOException $ex) {
    echo $ex->getMessage();
}