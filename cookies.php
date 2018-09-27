<?php

//Criar cookie
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $valor = $_POST['valor'];
    setcookie('cookie', $valor, strtotime('+1 hour'));
}

$cookie = 'Nenhum';
if(isset($_COOKIE['cookie'])) {
    $cookie = $_COOKIE['cookie'];
}

//Limpar cookie
if(isset($_GET['acao']) && $_GET['acao'] === 'limpar') {
    setcookie('cookie', '');
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
    <form action="cookies.php" method="post">
    <h3>Gravar cookie</h3>
    <h4>Valor atual do cookie: <?=$cookie?></h4>
    <p>
        <label for="valor">Valor</label>
        <input type="text" name="valor">
    </p>
    <button type="submit">Gravar</button>
    <br>
    <a href="?acao=limpar">Limpar cookie</a>
    </form>
</body>
</html>