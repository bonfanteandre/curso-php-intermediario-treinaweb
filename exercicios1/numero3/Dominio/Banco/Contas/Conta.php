<?php

namespace Dominio\Banco\Contas;

use Dominio\Banco\Agencia;
use \Dominio\Clientes\Cliente;

abstract class Conta
{
    private $numero;
    private $agencia;
    private $saldo;
    private $cliente;
    private $historicoOperacoes;

    public function __construct($numero, Agencia $agencia, Cliente $cliente)
    {
        $this->numero = $numero;
        $this->agencia = $agencia;
        $this->cliente = $cliente;
        $this->saldo = 0;
        $this->historicoOperacoes = [];
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    public function getAgencia()
    {
        return $this->agencia;
    }

    public function setAgencia($agencia)
    {
        $this->agencia = $agencia;
    }

    public function getCliente()
    {
        return $this->cliente;
    }

    private function addOperacao($tipo, $valor)
    {
        $this->historicoOperacoes[] = [
            'data' => date('d/m/y'),
            'hora' => date('H:i:s'),
            'tipo' => $tipo,
            'valor' => $valor
        ];
    }

    public function creditar($valor)
    {
        if (!is_numeric($valor) || floatval($valor) < 0) {
            return FALSE;
        }

        $this->addOperacao('Crédito', $valor);

        $this->saldo += $valor;
        return TRUE;
    }

    public function debitar($valor)
    {
        if (!is_numeric($valor) || floatval($valor) < 0) {
            return FALSE;
        }

        if ($valor > $this->saldo) {
            return FALSE;
        }

        $this->addOperacao('Débito', $valor);

        $this->saldo -= $valor;
        return TRUE;
    }

    public function gerarExtrato()
    {
        echo "Extrato da conta $this->numero Agência " . $this->agencia->getCodigo() . PHP_EOL;
        echo "Cliente: " . $this->cliente->getNome() . PHP_EOL;
        echo "Saldo: " . $this->saldo . PHP_EOL;
        echo 'Operações realizadas: ' . PHP_EOL;
        foreach($this->historicoOperacoes as $operacao) {
            $op = vsprintf(">> Data/Hora: %s %s - %s: R$ %s", array_values($operacao));
            echo $op . PHP_EOL;
        }
    }
}