<?php
namespace Source;

class Person
{
    protected static String $name = 'Invitado';

    public function __construct(String $name) {
        static::$name = $name;
    }

    /**
     * Get the value of name
     */
    public static function getName(): String
    {
        return static::$name;
    }
}

$juan = new Person('Juan');
$jhon = new Person('Jhon');

echo "{$juan->getName()}\n";
echo "{$jhon->getName()}";
