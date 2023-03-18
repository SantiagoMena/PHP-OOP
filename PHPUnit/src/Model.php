<?php
namespace Php\PhpUnit;
class Model
{
    public string $first_name;
    public string $last_name;
    public string $age;
    
    public function __construct($arguments) {
        $this->first_name = $arguments['first_name'];
        $this->last_name = $arguments['last_name'];
        $this->age = $arguments['age'];
    }
}