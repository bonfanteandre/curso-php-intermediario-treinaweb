<?php

class Cliente
{
    protected $nome;
    protected $email;

    public function setNome($nome)
    {
        if (mb_strlen($nome, 'utf-8') < 3) {
            throw new ErrorException('Nome deve ter mais de 2 caracteres');
        }
        $this->nome = $nome;
    }

    public function setEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new Exception('E-mail inválido');
        }
        $this->email = $email;
    }
}