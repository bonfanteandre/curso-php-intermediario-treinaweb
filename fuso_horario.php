<?php

date_default_timezone_set("America/Sao_Paulo");

$data = new DateTime("now");
echo "No Brasil são: " . $data->format("H:i:s") . "<br>";

$data = new DateTime("now", new DateTimeZone('Australia/Sydney'));
echo "Em Sidney, na Austrália são: " . $data->format("H:i:s") . "<br>";