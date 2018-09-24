<?php

namespace Dominio\Banco\Contas;

use Dominio\Banco\Agencia;
use Dominio\Banco\Contas\Conta;
use Dominio\Clientes\Cliente;


class ContaCorrente extends Conta
{
    private $limite;
    private $juros;

    public function __construct($numero, Agencia $agencia, Cliente $cliente, $limite, $juros)
    {
        parent::__construct($numero, $agencia, $cliente);

        $this->limite = $limite;
        $this->juro = $juros;
    }

    public function getLimite()
    {
        return $this->limite;
    }

    public function setLimite($limite)
    {
        if (is_numeric($limite) && floatval($limite) >= 0) {
            $this->limite = floatval($limite);
        }
    }

    public function getJuros()
    {
        return $this->juros;
    }

    public function setJuros($juros)
    {
        if (is_numeric($juros) && floatval($juros) >= 0) {
            $this->juros = floatval($juros);
        }
    }
}