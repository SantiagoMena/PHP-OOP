<?php

namespace Php\Componentes;

use Closure;

class HtmlBuilder
{
    public function hr()
    {
        return "<hr>";
    }

    public function success($message)
    {
        return "<p>{$message}</p>";
    }

    private static $macros;

    public static function hasMacro($method)
    {
        return isset(static::$macros[$method]);
    }

    // Macro
    public static function macro($method, Closure $macro)
    {
        static::$macros[$method] = $macro;
    }

    public function __call($method, array $arguments)
    {
        if(static::hasMacro($method)) {
            return call_user_func_array(static::$macros[$method], $arguments);
        }

        throw new \BadMethodCallException("The method {$method} does not exist");
        
    }
}
