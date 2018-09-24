<?php

namespace MeuProjeto;

//use DateTime;

class Validation
{
    public function data()
    {
        $data = new \DateTime();
        echo $data->format('Y');
    }
}