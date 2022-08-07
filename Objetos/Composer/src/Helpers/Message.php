<?php
namespace Source\Helpers;

/**
 * Clase para imprimir mensajes
 */
class Message
{
    public static function show(String $message)
    {
        echo "{$message}\n";
    }
}