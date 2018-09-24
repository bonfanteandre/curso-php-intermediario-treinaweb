<?php

require 'Cliente.php';

try {
    $cli = new Cliente();
    $cli->setNome('João');
    $cli->setEmail('joaogmail.com');
} catch (ErrorException $erEx) {
    echo 'ErrorException lançada!';
} catch (Exception $ex) {
    echo 'Ocorreu um erro: ' . $ex->getMessage();
} finally {
    var_dump($cli);
}