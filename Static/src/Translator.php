<?php

namespace Source;

class Translator
{
    protected static $messages = [];

    public static function set(array $messages)
    {
        static::$messages = $messages;
    }

    public static function get(string $key, array $params = [])
    {
        if(! static::has($key)) {
            return "[$key]";
        }

        return static::replaceParams(static::$messages[$key], $params);
    }

    public static function has(string $key)
    {
        return isset(static::$messages[$key]);
    }

    public static function replaceParams(string $message, array $params)
    {
        foreach ($params as $key => $value) {
            $message = str_replace(":$key", $value, $message);
        }

        return $message;
    }
}
