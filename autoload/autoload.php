<?php

function autoload1 ($classe) 
{
    $path = __DIR__ . "/classes/$classe.php";
    echo $path;
    if (file_exists($path)) {
        require_once $path;
        return true;
    }

    return false;
}

spl_autoload_register('autoload1');