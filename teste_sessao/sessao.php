<?php

session_start();

if (!isset($_SESSION['logado']) || $_SESSION['logado'] !== true) {
    header('Location: login.php');
    exit();
}

if (isset($_GET['acao']) && $_GET['acao'] === 'logout') {
    session_destroy();
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Bem-vindo, <?=$_SESSION['usuario']?></h1>
    <p><small><a href="?acao=logout">Sair</a></small></p>
</body>
</html>