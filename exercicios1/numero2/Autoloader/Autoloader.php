<?php

class Autoloader
{
    public function registrar()
    {
        spl_autoload_register([$this, 'carregar']);
    }

    public function carregar($classe)
    {
        $path = str_replace('\\', DIRECTORY_SEPARATOR, $classe);
        $path .= '.php';
        require_once $path;
    }
}