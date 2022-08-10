<?php
namespace Source;
class Log
{
    protected static Logger $logger;

    public static function setLogger(Logger $logger)
    {
        static::$logger = $logger;
    }
    public static function info(string $message)
    {
        static::$logger->info($message);
    }
}
