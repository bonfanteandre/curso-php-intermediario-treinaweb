<?php

$data = new DateTime();
$data->setDate(1997, 6, 10);
$data->setTime(1, 15, 0);

var_dump($data);

echo "Timestamp: {$data->getTimestamp()} <br>";

$data->modify('+7 days');
var_dump($data);