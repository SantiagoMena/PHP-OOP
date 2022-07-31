<?php
class Person
{
    private $firstName;
    private $lastName;

    function __construct($firstName = null, $lastName = null) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }

    /**
     * Get the value of firstName
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set the value of firstName
     */
    public function setFirstName($firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get the value of lastName
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set the value of lastName
     */
    public function setLastName($lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }
    
}

// Ejemplo
$person = new Person;
$person->setFirstName('John');
$person->setLastName('Doe');
echo $person->getFirstName() . " " . $person->getLastName();