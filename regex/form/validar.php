<?php

error_reporting(E_ERROR);

$nome = trim($_POST['nome']);
$email = trim($_POST['email']);
$twitter = strtolower(trim($_POST['twitter']));


if (!preg_match('/^[^0-9]{2,30}$/i', $nome)) {
    exit('Nome em formato errado');
}

$emailRegex = <<<REGEXMAIL
/^[^0-9][a-z0-9_]+([.][a-z0-9_]+)*[@][a-z0-9-_]+([.][a-z0-9]{2,3})*[.][a-z]{2,3}$/
REGEXMAIL;

if (!preg_match($emailRegex, $email)) {
    exit('Email em formato errado');
}

if (!preg_match('/^@[a-z_]{1,15}$/', $twitter)) {
    exit('Twitter formato errado');
}
