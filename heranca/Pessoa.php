<?php

class Pessoa
{
    protected $nome;
    protected $nascimento;
    
    public function __construct($nome)
    {
        $this->setNome($nome);
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = ucfirst($nome);
    }

    public function getNascimento()
    {
        return $this->nascimento;
    }

    public function setNascimento($nascimento)
    {
        $this->nascimento = str_replace('/', '-', $nascimento);
    }

    public function getIdade()
    {
        $nascimento = new DateTime($this->nascimento);
        $hoje = new DateTime('today');

        return $nascimento->diff($hoje)->y;
    }
}