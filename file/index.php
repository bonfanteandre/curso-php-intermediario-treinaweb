<?php

error_reporting(E_ALL);

require_once 'File.php';

$file = new File('teste.txt');
$file->write('Hello, World!');