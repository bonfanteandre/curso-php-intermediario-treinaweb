<?php

namespace Dominio\Banco\Contas;

use Dominio\Banco\Agencia;
use Dominio\Banco\Contas\Conta;
use Dominio\Clientes\Cliente;


class ContaPoupanca extends Conta
{
    private $retorno;

    public function __construct($numero, Agencia $agencia, Cliente $cliente, $retorno)
    {
        parent::__construct($numero, $agencia, $cliente);

        $this->retorno = $retorno;
    }
}