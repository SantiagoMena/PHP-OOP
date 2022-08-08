<?php
namespace Source;

class Person
{
    protected String $name;
    protected static String $database = 'mysql';
    public static String $table = 'people';

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

    
    function save()
    {
        echo "Saving {$this->name} in the table " . static::$table . "\n";
    }
}

Person::$table = 'personas';

$jhon = new Person('Jhon');
$jhon->save();

$juan = new Person('Juan');
$juan->save();


echo "{$juan->getName()}\n";
echo "{$jhon->getName()}";
