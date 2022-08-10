<?php
namespace Source;
class HtmlLogger implements Logger
{
    public static function info(string $message): void
    {
        echo "{$message}\n";
    }
}