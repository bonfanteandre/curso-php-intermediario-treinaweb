<?php

try {
    
    $pdo = new PDO('mysql:host=localhost;port=3306;dbname=php_intermediario', 'andre', '123');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_PERSISTENT, true);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    $id = $_GET['id'];

    // $stmt = $pdo->query('SELECT * FROM funcionarios WHERE id = ' . $id);
    // $funcionarios = $stmt->fetchAll();

    $stmt = $pdo->prepare('SELECT * FROM funcionarios WHERE id = :id');
    $stmt->bindValue(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    // $stmt->execute([$id]);
    $funcionarios = $stmt->fetchAll();

    var_dump($funcionarios);

} catch (PDOException $ex) {
    var_dump($ex);
}