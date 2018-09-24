<?php

class Carro
{
    public $marca;
    public $modelo;
    public $quantidadePortas;
    public $cor;
    public $ano;

    public function acelerar()
    {
        echo '-> O veículo está sendo acelerado...<br>';
    }

    public function frear()
    {
        echo '-> O veículo está sendo freado...<br>';
    }
}