<?php

class Inimigo extends Ator
{
    protected function setVida()
    {
        $this->vida = 150;
    }

    public function darPorrada()
    {
        echo 'Dando porrada no jogador...<br>';
    }
}