<?php
class Person
{
    var $firstName;
    var $lastName;

    function __construct($firstName = null, $lastName = null) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    function fullName() {
        return $this->firstName . " " . $this->lastName;
    }
    
}

// Ejemplo 1
$person1 = new Person;
$person1->firstName = 'John';
$person1->lastName = 'Doe';
echo $person1->fullName();

echo "\n";

// Ejemplo 2
$person2 = new Person('Juan', 'Perez');
echo $person2->fullName();