<?php

/*
Defina a seguinte estrutura de classes e pastas:

Esportes (pasta)
    Esportes com bola (pasta)
        Futebol (pasta)
            Campeonatos (pasta)
                Brasileirão (classe)
        Artes Marciais (pasta)
            Judô (classe)
        Corridas (pasta)
            Formula 1 (classe)

As classes devem seguir a ordem hierárquica apresentada na lista acima 
para definir seus namespaces. Crie um autoloader simples que consiga 
carregar as classes acima sem precisar incluir os arquivos manualmente.
*/

require_once __DIR__ . '/Autoloader/Autoloader.php';

use \Esportes\ComBola\Futebol\Campeonatos\Brasileirao;

$autoloader = new Autoloader();
$autoloader->registrar();

$judo = new \Esportes\ArtesMarciais\Judo;
$f1 = new \Esportes\Corridas\Formula1;
$brasileirao = new Brasileirao;

var_dump($judo, $f1, $brasileirao);