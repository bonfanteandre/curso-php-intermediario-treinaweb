<?php

class Validador
{
    public static function validarEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
}