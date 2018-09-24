<?php

class Livro
{
    public $codigo;
    public $nome;
    public $autor;
    public $valor;

    public function cadastrar()
    {
        echo "Cadastrando '$this->nome' no banco de dados";
    }

    public function mostrar()
    {
        $valores = [$this->nome, $this->autor, $this->valor];
        $resultado = vsprintf('<br>Nome: %s<br> Autor: %s<br> Valor: %s<br>', $valores);
        echo $resultado;
    }
}