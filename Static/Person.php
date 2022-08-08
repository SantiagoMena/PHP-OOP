<?php
namespace Source;

class Person
{
    protected String $name;

    public function __construct(String $name) {
        $this->name = $name;
    }

    /**
     * Get the value of name
     */
    public function getName(): String
    {
        return $this->name;
    }
}

$juan = new Person('Juan');
$jhon = new Person('Jhon');

echo "{$juan->getName()}\n";
echo "{$jhon->getName()}";
