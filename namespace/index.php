<?php

require_once 'Validation.php';
require_once 'Validation2.php';

use TreinaWeb\Library\Validation;
use MeuProjeto\Validation as TesteValidation;

$val = new TreinaWeb\Library\Validation;
var_dump($val);

$val2 = new Validation;
var_dump($val2);

$val3 = new MeuProjeto\Validation;
var_dump($val3);

$val3 = new TesteValidation;
var_dump($val3);

$val3->data();