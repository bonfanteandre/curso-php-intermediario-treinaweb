<?php

class Cliente
{
    public $nome;
    protected $email;

    public function setEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
            return true;
        }

        exit('Email inválido');
    }
}