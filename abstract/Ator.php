<?php

abstract class Ator
{
    protected $vida;

    public function __construct()
    {
        $this->setVida();
    }

    public function tomarDano()
    {
        echo 'Tomando dano...<br>';
        $this->vida -= 10;
    }

    abstract protected function setVida();
}