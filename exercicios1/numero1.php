<?php

/**
 *  Crie uma classe de validação que possua métodos para validar os seguintes itens: 
 *  string vazia, tamanho mínimo da string, tamanho máximo da string, se o valor é 
 *  numérico e por último, se um valor está dentro do range esperado.
 */

class Validador
{
    public static function vazia($str)
    {
        return empty(trim($str));
    }

    public static function min($str, $min)
    {
        return strlen($str) >= $min;
    }

    public static function max($str, $max)
    {
        return strlen($str) <= $max;
    }

    public static function isNumero($valor)
    {
        return is_numeric($valor);
    }

    public static function inRange($valor, $min, $max)
    {
        return ($valor >= $min) && ($valor <= $max);
    }
}

echo 'String vazia: ' . PHP_EOL;
echo "String '    ' -> ";
echo Validador::vazia('    ') . PHP_EOL;
echo "String 'string' -> ";
echo Validador::vazia('string') . PHP_EOL;

echo 'Length minimo: ' . PHP_EOL;
echo "String 'abc', minimo: 1 -> ";
echo Validador::min('abc', 1) . PHP_EOL;
echo "String 'abc', minimo: 5 -> ";
echo Validador::min('abc', 5) . PHP_EOL;

echo 'Length maximo: ' . PHP_EOL;
echo "String 'abc', máximo: 1 -> ";
echo Validador::max('abc', 1) . PHP_EOL;
echo "String 'abc', máximo: 5 -> ";
echo Validador::max('abc', 5) . PHP_EOL;

echo 'É um número: ' . PHP_EOL;
echo "String '1' -> ";
echo Validador::isNumero('1') . PHP_EOL;
echo "String 'abc' -> ";
echo Validador::isNumero('abc') . PHP_EOL;

echo 'In range: ' . PHP_EOL;
echo "Valor 5, Min 1, Max 10 -> ";
echo Validador::inRange(5, 1, 10) . PHP_EOL;
echo "Valor 11, Min 1, Max 10 -> ";
echo Validador::inRange(11, 1, 10) . PHP_EOL;