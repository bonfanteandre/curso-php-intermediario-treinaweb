<?php

namespace Dominio\Clientes;

class Cliente
{
    private $nome;
    private $email;
    private $endereco;

    public function __construct($nome, $email, $endereco)
    {
        $this->nome = $nome;
        $this->setEmail($email);
        $this->endereco = $endereco;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->email = $email;
        }
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }
}