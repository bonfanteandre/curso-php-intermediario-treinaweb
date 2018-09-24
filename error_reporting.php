<?php

//Nenhum
error_reporting(0);

//Somente notices e warning
error_reporting(E_NOTICE | E_WARNING);

//Todos menos E_ERROR (erros fatais)
error_reporting(E_ALL ^ E_ERROR);

//Todos
error_reporting(E_ALL);