<?php

session_start();

if ($_POST) {

    if ($_POST['usuario'] === 'admin' && $_POST['senha'] === '123') {
        
        $_SESSION['logado'] = true;
        $_SESSION['usuario'] = 'admin';

        header('Location: sessao.php');
    }

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
    <form action="login.php" method="post">
        <p>
            <label for="usuario">Usuário: </label>
            <input type="text" name="usuario">
        </p>
        <p>
            <label for="senha">Senha: </label>
            <input type="password" name="senha">
        </p>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>